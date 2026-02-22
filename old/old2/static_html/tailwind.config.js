module.exports = {
    content: [
        "./**/*.html",
        "./assets/js/**/*.js",
        "./partials/**/*.html"
    ],
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#660219',
                    dark: '#4d0213',
                    light: '#800320',
                },
                secondary: {
                    DEFAULT: '#0f172a',
                    light: '#1e293b',
                },
                background: {
                    light: '#f8f9fa',
                    dark: '#1e293b',
                },
                surface: {
                    light: '#ffffff',
                    dark: '#334155',
                },
                'text-main': '#1e293b',
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
            },
            borderRadius: {
                'DEFAULT': '0.25rem',
                'md': '0.375rem',
                'lg': '0.5rem',
                'xl': '0.75rem',
                'full': '9999px',
                'inst': '0.25rem',
            }
        }
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ],
}
