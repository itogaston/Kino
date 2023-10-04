/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js,php}",
    "./public/*.html"
  ],
  theme: {
    extend: {},
    colors: {
      fondo: '#14181c',
      headerMenu: '#21282f',
      textTitle: 'white',
      textBase: '#99aabb ',
      hover: '#611bac  ',
    }
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ]
}

