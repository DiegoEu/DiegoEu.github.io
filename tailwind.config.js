/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        'mule-fawn': {
          '50': '#fbf7ef',
          '100': '#f2e9d3',
          '200': '#e5d0a2',
          '300': '#d7b572',
          '400': '#cd9f52',
          '500': '#c3843d',
          '600': '#ac6833',
          '700': '#8c4c2c',
          '800': '#763f2a',
          '900': '#623525',
          '950': '#371a11',
        },
      },
    },
  },
  plugins: [
    require('tailwindcss-animated')
  ],
}