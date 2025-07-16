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
    },
  },
  plugins: [],
}
