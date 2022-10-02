/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{php,js,html}", "*.php"],
  theme: {

    fontFamily: {
      'sans': 'Montserrat'
    },
    extend: {
      minWidth: {
        '320': '20rem',
      },
      colors: {
        'main':'#2563eb',
        'body': '111827'
      }
    },
  },
  plugins: [],
}
