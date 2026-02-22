import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#660219',
                    dark: '#4d0213',
                    light: '#800320',
                    soft: '#8c0f2f',
                },
                footer: '#4d0213',
                secondary: {
                    DEFAULT: '#0f172a',
                    light: '#1e293b',
                },
                background: {
                    light: '#f8f9fa',
                    dark: '#15070d',
                },
                surface: {
                    light: '#ffffff',
                    dark: '#221017',
                },
                brand: {
                    gold: '#BA7C00',
                    'gold-light': '#dba93b',
                    'gold-soft': '#f8ecd0',
                    'ink-light': '#f5eaee',
                },
                'text-main': '#1f2230',
                'text-muted': '#64748b',
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
                'hard': '4px 4px 0px #E5E7EB',
                'hard-hover': '6px 6px 0px #660219',
                'inst': '0 10px 30px -14px rgba(14, 12, 22, 0.35)',
            },
            borderRadius: {
                'DEFAULT': '0.625rem',
                'md': '0.625rem',
                'lg': '0.75rem',
                'xl': '0.875rem',
                'full': '9999px',
                'inst': '0.625rem',
            }
        },
    },

    plugins: [forms, require('@tailwindcss/typography')],
};
