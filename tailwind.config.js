/** @type {import('tailwindcss').Config} */
export const darkMode = 'class';
export const content = ["./**/*.{html,js,php}"];
export const theme = {
  screens: {
    'sm': '640px',
    'md': '768px',
    'lg': '1024px',
    'xl': '1280px',
    '2xl': '1536px',
  },
  fontSize: {
    'xs': '0.75rem',
    'sm': '0.875rem',
    'base': '1rem',
    'lg': '1.125rem',
    'xl': '1.25rem',
    '2xl': '1.5rem',
    '3xl': '1.875rem',
    '4xl': '2.25rem',
    '5xl': '3rem',
    '6xl': '4rem',
  },
  fontFamily: {
    sans: ['Open sans', '-apple-system'],
    serif: ['Merriweather', 'serif'],
    mono: ['Fira Code', 'monospace'],
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('tailwind-scrollbar'),
  ],
};
