import './bootstrap';

import Alpine from 'alpinejs';

// Global lock to light mode only.
document.documentElement.classList.remove('dark');
document.documentElement.style.colorScheme = 'light';
localStorage.removeItem('theme');

window.Alpine = Alpine;

Alpine.start();
