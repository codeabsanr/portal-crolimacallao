import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',

    content: [
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontSize: {
            xs: ['0.75rem', { lineHeight: '1.3' }],
            sm: ['0.875rem', { lineHeight: '1.45' }],
            base: ['0.95rem', { lineHeight: '1.6' }],
            lg: ['1.05rem', { lineHeight: '1.55' }],
            xl: ['1.2rem', { lineHeight: '1.45' }],
            '2xl': ['1.4rem', { lineHeight: '1.35' }],
            '3xl': ['1.7rem', { lineHeight: '1.25' }],
            '4xl': ['2rem', { lineHeight: '1.2' }],
            '5xl': ['2.4rem', { lineHeight: '1.12' }],
            '6xl': ['2.9rem', { lineHeight: '1.08' }],
        },
        extend: {
            backgroundImage: {
                'inst-hero': 'linear-gradient(124deg, #4d0213 0%, #660219 42%, #8c0f2f 72%, #BA7C00 100%)',
                'inst-hero-overlay': 'radial-gradient(circle_at_14%_16%, rgba(255,255,255,0.14), transparent 34%), radial-gradient(circle_at_86%_80%, rgba(186,124,0,0.2), transparent 36%)',
                'inst-brand-gradient': 'linear-gradient(128deg, #4d0213 0%, #660219 52%, #BA7C00 100%)',
                'inst-brand-soft': 'linear-gradient(180deg, #ffffff 0%, #fdfbfd 62%, #fbf4e8 100%)',
                'inst-brand-section': 'linear-gradient(180deg, #fdfbfd 0%, #f9f5f7 100%)',
            },
            spacing: {
                '6': '1.375rem',
                '8': '1.75rem',
                '10': '2.25rem',
                '12': '2.75rem',
                '14': '3.25rem',
                '16': '3.75rem',
                '20': '4.75rem',
                '24': '5.75rem',
                '32': '7.5rem',
            },
            colors: {
                primary: {
                    DEFAULT: '#660219',
                    dark: '#4d0213',
                    light: '#800320',
                    soft: '#8c0f2f',
                    tint: '#f9f4f6',
                    mist: '#fdfbfc',
                },
                footer: '#4d0213',
                secondary: {
                    DEFAULT: '#4a0b1c',
                    light: '#6d1730',
                },
                background: {
                    light: '#fbfaf9',
                    canvas: '#fefdfd',
                    dark: '#15070d',
                },
                surface: {
                    light: '#ffffff',
                    soft: '#fffdfd',
                    dark: '#221017',
                },
                brand: {
                    gold: '#BA7C00',
                    'gold-light': '#dba93b',
                    'gold-soft': '#f8ecd0',
                    'ink-light': '#faf7f8',
                    'ink-soft': '#fdfcfc',
                },
                'text-main': '#1f2230',
                'text-muted': '#6f5560',
                success: {
                    DEFAULT: '#059669',
                    light: '#d1fae5',
                },
                error: {
                    DEFAULT: '#dc2626',
                    light: '#fee2e2',
                },
                gold: '#d97706',
            },
            fontFamily: {
                sans: ['Roboto', 'sans-serif'],
                display: ['Roboto', 'sans-serif'],
                body: ['Roboto', 'sans-serif'],
                serif: ['Roboto', 'sans-serif'],
            },
            boxShadow: {
                'hard': '4px 4px 0px #F1E8EB',
                'hard-hover': '6px 6px 0px #660219',
                'inst': '0 10px 30px -14px rgba(47, 8, 22, 0.3)',
                'hero-panel': '0 24px 44px -32px rgba(77, 2, 19, 0.45)',
            },
            borderRadius: {
                'DEFAULT': '0.125rem',
                'md': '0.125rem',
                'lg': '0.125rem',
                'xl': '0.25rem',
                'full': '9999px',
                'inst': '0.125rem',
            }
        },
    },

    plugins: [forms, require('@tailwindcss/typography')],
};
