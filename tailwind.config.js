/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'betatron': ['Betatron', 'sans-serif'],
      },
      borderWidth: {
        '1': '1px',
      },
      colors: {
        'backgroundHeader': '#152243',
        'lightBlue': '#00a2ff',
        'transparentBg': 'rgba(0,0,0,.4)',
      },
      margin: {
        '355': '355px',
      },
      width: {
        '800': '800px',
        '1000': '1000px'
      },
      height: {
        '500': '500px',
      }
    },
  },
  plugins: [],
}

