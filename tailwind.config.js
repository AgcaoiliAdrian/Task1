// const plugin = require('tailwindcss/plugin')
const colors = require('tailwindcss/colors')

module.exports = {
  content: ["./layout/*.php"],
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      'crimson': '#a42d2d',
      'white': '#ffffff',
      'black': '#000000',
      'dark-blue': '#1C62B0',
      gray: colors.slate,
      yellow: colors.amber,
      blue: colors.blue
    },
    extend: {
      width: {
        '73': '19rem'
      },
    },
    fontFamily: {
      sans: ['Poppins']
    }
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio')
  ],
}