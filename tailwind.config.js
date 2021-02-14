module.exports = {
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {}
  },
  variants: {
    extend: {}
  },
  plugins: [],
  // purge: {
  //   enabled: false
  // }
  purge: {
    content: [
      './*.php',
      './**/*.php'
    ]
  }
}
