import os
import re
from collections import defaultdict
from bs4 import BeautifulSoup
from urllib.parse import urlparse

src_dir = r"C:\laragon\www\portal-crolimacallao\src"

# Define strict allowed colors based on tailwind-config.js
allowed_colors = [
    'primary', 'primary-dark', 'primary-light',
    'secondary', 'secondary-light',
    'background-light', 'background-dark',
    'surface-light', 'surface-dark',
    'text-main', 'text-muted',
    'success', 'success-light',
    'error', 'error-light',
    'gold',
    'white', 'black', 'transparent', 'current'
]

# Tailwind functional prefixes that apply colors
color_prefixes = ['text-', 'bg-', 'border-', 'ring-', 'fill-', 'stroke-', 'divide-', 'placeholder-', 'from-', 'via-', 'to-']

# We still allow slate classes generally because they are the base neutral palette approved in config ('text-main' is slate-800 equivalent), but we'll flag wild colors.
allowed_standard_colors = ['slate', 'gray'] # Slate is ok, gray is acceptable fallback
forbidden_standard_colors = ['red-', 'orange-', 'amber-', 'yellow-', 'lime-', 'green-', 'emerald-', 'teal-', 'cyan-', 'sky-', 'blue-', 'indigo-', 'violet-', 'purple-', 'fuchsia-', 'pink-', 'rose-']

issues = {
    "broken_links": [],
    "invalid_styles": [],
    "duplicate_content": []
}

def analyze_file(filepath):
    rel_path = os.path.relpath(filepath, src_dir)
    
    with open(filepath, 'r', encoding='utf-8') as f:
        html_content = f.read()

    soup = BeautifulSoup(html_content, 'html.parser')

    # 1. Check Links
    for a in soup.find_all('a'):
        href = a.get('href', '').strip()
        if not href or href == '#' or href.startswith('javascript:'):
            if not a.get("id") and not a.get("onclick"): # Skip some interactive buttons
                 issues["broken_links"].append({"file": rel_path, "type": "Empty or Dead Link", "href": href, "text": a.text.strip()})
            continue

        if href.startswith('http') or href.startswith('mailto:') or href.startswith('tel:'):
            continue

        # Resolve relative link
        target_path = os.path.normpath(os.path.join(os.path.dirname(filepath), href))
        if not os.path.exists(target_path) and not '#' in href:
             issues["broken_links"].append({"file": rel_path, "type": "File Not Found (404)", "href": href, "resolved": target_path})

    # 2. Check Colors
    all_classes = []
    for tag in soup.find_all(True):
        if tag.has_attr('class'):
            all_classes.extend(tag['class'])

    for cls in set(all_classes):
        for prefix in color_prefixes:
            if cls.startswith(prefix) and not cls.startswith('text-base') and not cls.startswith('text-lg') and not cls.startswith('text-xl') and not cls.startswith('text-2xl') and not cls.startswith('text-3xl') and not cls.startswith('text-4xl') and not cls.startswith('text-5xl') and not cls.startswith('text-6xl') and not cls.startswith('text-center') and not cls.startswith('text-left') and not cls.startswith('text-right') and not cls.startswith('text-justify'):
                color_name = cls[len(prefix):]
                # Strip opacity modifier e.g., /50
                color_name = color_name.split('/')[0]
                
                # Check semantic colors
                if color_name in allowed_colors:
                    continue
                
                # Check standard colors
                is_forbidden = any(color_name.startswith(fc) for fc in forbidden_standard_colors)
                # Ensure they don't use raw hex like bg-[#123456] if not needed
                if is_forbidden or color_name.startswith('['):
                     issues["invalid_styles"].append({"file": rel_path, "class": cls})

    # 3. Check Duplicate Content (Naïve approach: check H2/H3 text and large paragraphs)
    seen_texts = set()
    for tag in soup.find_all(['h2', 'h3', 'p']):
        text = tag.text.strip()
        if len(text) > 40: # Only check substantial text
            if text in seen_texts:
                 issues["duplicate_content"].append({"file": rel_path, "tag": tag.name, "text_preview": text[:50] + "..."})
            seen_texts.add(text)

print("Starting Audit...")
for root, _, files in os.walk(src_dir):
    if "admin" in root: continue
    for file in files:
        if file.endswith('.html'):
            analyze_file(os.path.join(root, file))

print(f"\\n--- BROKEN OR SUSPICIOUS LINKS ({len(issues['broken_links'])}) ---")
for issue in issues["broken_links"]:
    print(f"[{issue['file']}] {issue['type']} -> '{issue['href']}' (Text: '{issue.get('text', '')}')")

print(f"\\n--- UNAUTHORIZED STYLES ({len(issues['invalid_styles'])}) ---")
for issue in issues["invalid_styles"]:
    print(f"[{issue['file']}] Found class: '{issue['class']}'")

print(f"\\n--- POTENTIAL DUPLICATE CONTENT ({len(issues['duplicate_content'])}) ---")
for issue in issues["duplicate_content"]:
    print(f"[{issue['file']}] Duplicated <{issue['tag']}>: '{issue['text_preview']}'")

print("\\nAudit Complete.")
