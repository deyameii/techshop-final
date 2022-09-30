/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{php,js, html}", "*.php"],
  theme: {

    fontFamily: {
      'sans': 'Montserrat'
    },
    // colors: {
    //   darkTwo: '#1E1F29',
    //   white: '#ffffff'
    // },
    extend: {
      minWidth: {
        '320': '20rem',
      },
    },
  },
  plugins: [],
}
