/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        'kanit' : ['Kanit', 'sans-serif'],
      },
      colors: {
        'body' : '#F3F1EF',
        'orange-theme' : '#E94F36',
        'gray-secondary' : '#D9D9D9',
        'gray-th' : '#e2e2e2',
      },
      screens: {
        'sm-350' : '350px',
        'sm-400' : '400px',
        'sm-460' : '460px',
        'sm-470' : '470px',
        'sm-500' : '500px',
        'sm-550' : '550px',
        'sm-600' : '600px',
        'sm-700' : '700px',
        'md-768' : '768px',
        'md-810' : '810px',
        'md-850' : '850px',
        'md-960' : '960px',
        'md-1100' : '1100px',
      },
    },
  },
  plugins: [],
}