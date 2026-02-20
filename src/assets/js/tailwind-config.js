tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#a91b3b', // Deep burgundy from reference
                    dark: '#8B142F', // Hover state darker shade relative to primary
                    light: '#ca2247',
                },
                secondary: {
                    DEFAULT: '#0f172a', // Dark navy/slate
                    light: '#1e293b',
                },
                background: {
                    light: '#f8f9fa', // Light gray background
                    dark: '#1e293b', // Dark slate background
                },
                surface: {
                    light: '#ffffff',
                    dark: '#334155',
                },
                'text-main': '#1e293b', // slate-800 equivalent
                'text-muted': '#64748b', // slate-500 equivalent
                success: {
                    DEFAULT: '#059669', // emerald-600
                    light: '#d1fae5', // emerald-100
                },
                error: {
                    DEFAULT: '#dc2626', // red-600
                    light: '#fee2e2', // red-100
                },
                gold: '#d97706', // amber-600
            },
            fontFamily: {
                sans: ['Roboto', 'sans-serif'],
                display: ['Roboto', 'sans-serif'],
                body: ['Roboto', 'sans-serif'],
                serif: ['Roboto', 'sans-serif'], // Forcing all to Roboto as per reference 3
            },
            boxShadow: {
                'hard': '4px 4px 0px #E5E7EB',
                'hard-hover': '6px 6px 0px #a91b3b',
            },
            borderRadius: {
                'DEFAULT': '0.25rem', // Minimal rounded corners as requested
                'md': '0.375rem',
                'lg': '0.5rem',
                'xl': '0.75rem',
                'full': '9999px',
                'inst': '0.25rem', // Updating custom variables to 0.25rem
            }
        }
    }
}
