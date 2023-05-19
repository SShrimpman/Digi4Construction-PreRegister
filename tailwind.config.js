/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'backgroundHeader': '#152243',
      },
      width: {
        '800': '800px',
      }
    },
  },
  plugins: [],
}

