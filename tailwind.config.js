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
        primary: '#17821B',
        primaryhover: '#004613',
      },
      fontFamily: {
        'raleway': ['Raleway', 'inter'],
        'rasa': ['Rasa', 'inter'],
      },
      screens:{
        'h470': {'raw': '(max-height: 470px)'},
        'h600': {'raw': '(max-height: 600px)'},
        'h700': {'raw': '(max-height: 700px)'},
        'h800': {'raw': '(max-height: 800px)'},
        'h900': {'raw': '(max-height: 900px)'},
        'h1080': {'raw': '(max-height: 1080px)'},
      },
    },
  },
  plugins: [],
}
