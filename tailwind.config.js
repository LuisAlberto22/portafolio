/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {

  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {


    fontFamily: {
      'Quantico': ['Quantico'],
      'GeostarFill': ['Geostar Fill'],
    },
    container: {
      center: true,
    },
    extend: {
      colors: {
        'matrix-text': '#7FFF00',
        'matrix-hover': '#006400',
        'matrix-footer' : '#1A1A1A',
        'matrix-bg': '#000000',
      },

    },
  },
  plugins: [

  ],
}
