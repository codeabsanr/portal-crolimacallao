# UX Specification: Portal Crolimacallao

## 1. Design Principles

- **Authority & Trust:** A visual language that conveys institutional stability.
- **Utility over Decoration:** Clean layout with high information density where needed (e.g., directory listings).
- **Accessibility First:** High contrast, legible typography (min 16px for body), and keyboard navigability.
- **Modern Institutionalism:** Use of subtle glassmorphism on UI elements (sidebars, cards) to create a premium, state-of-the-art feel.

---

## 2. Brand Identity & Visual System

### 2.1 Color Palette
- **Primary Blue:** `#003366` (Institutional Deep Blue) - Backgrounds, primary headers.
- **Teal Accent:** `#008080` (Medical/Health Teal) - Links, active states, status indicators.
- **Gold/Sand Primary:** `#C5A059` (Authority/Honor) - Accents, borders, logo highlights.
- **Surface:** `#F8F9FA` (Off-white) - Main content area background.
- **Text:** `#212529` (Dark Grey) - High contrast body text.

### 2.2 Typography
- **Headings:** *Montserrat* or *Inter* (Semi-bold/Bold). Professional, modern, and trustworthy.
- **Body:** *Inter* or *Open Sans* (Regular). High legibility for long-form normative text.

---

## 3. Information Architecture (Sitemap)

- **Home** (Hero, Quick Access, Latest News, Statistics)
- **Institucional**
  - Quiénes Somos (History, Mission, Vision)
  - Consejo Directivo (Profile cards)
  - Transparencia (Document search)
- **Trámites**
  - Colegiatura (Step-by-step guide)
  - Habilitación (Real-time check)
  - Mesa de Partes (Form + Tracking)
- **Colegiados**
  - Busca Obstetra (Live search)
- **Actualidad**
  - Blog/Noticias
  - Eventos/Calendario
- **Contacto**
  - Sede central (Map, Hours, Form)

---

## 4. Key User Journeys

### 4.1 Journey: Verifying Professional Habilitation
1. **Entry:** User lands on Home.
2. **Action:** Clicks "Busca Obstetra" in the Hero section.
3. **Interface:** Enters DNI or COP number. Result shows a clear status badge: "HABILITADO" (Green) or "NO HABILITADO" (Red).
4. **Outcome:** User can download a PDF habilitation certificate directly.

### 4.2 Journey: Initiating a New Procedure
1. **Entry:** User navigates to "Trámites" -> "Colegiatura".
2. **Interface:** Views a clear prerequisite checklist.
3. **Action:** Clicks "Iniciar Trámite" which redirects to the secure Mesa de Partes form.
4. **Outcome:** Receives a tracking ID and email confirmation.

---

## 5. UI Components & Patterns

- **Glassmorphic Cards:** Used for news and events to create depth without clutter.
- **Responsive Navigation:** Mega-menu on desktop; focused bottom-tab or hamburger on mobile.
- **Alert System:** Standardized banners for urgent institutional announcements.
- **Data Tables:** Dense but readable tables for listings, with integrated search and pagination.

---

## 6. Accessibility & Responsiveness

- **Mobile First:** All interactive elements must have a minimum touch target of 44x44px.
- **DarkMode Support:** Implementation of a dark theme to reduce eye strain for night shifts.
- **Screen Readers:** Semantic HTML (HTML5 tags) and ARIA labels on all dynamic elements.
