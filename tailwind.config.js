/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ["./**/*.php"],
  theme: {
    screens: {
      'xs': '425px',
      '3xl': '1950px',
      ...defaultTheme.screens,
    },
  },
  plugins: [],
}



  