/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/components/**/*.blade.php",
    "./resources/livewire/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './node_modules/preline/dist/*.js',
  ],
  daisyui: {
    themes: [],
  },
  theme: {
    extend: {
      container: {
        center: true,
        padding: '1rem',
      },
      backgroundSize: {
        'size-200': '200% 200%',
      },
      backgroundPosition: {
        'pos-0': '0% 0%',
        'pos-100': '100% 100%',
      },
      fontFamily: {
        helvetica: 'Helvetica, Arial, sans-serif'
      },
      colors: {
        mainDark: "#121212",
        mainDark1: '#141414',
        mainDark2: '#18181B',
        mainDark3: '#1F1F1F',
        mainDark4: '#242424',
        borderDark: "#404040",
        orangeDark: "#FFA500",
        primary: "#9333EA",
      }
    },
  },
  plugins: [
    require('daisyui'),
    require('@tailwindcss/line-clamp'),
    require('preline/plugin'),
    require('@tailwindcss/forms'),
  ],
}

