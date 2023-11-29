module.exports = {
  purge: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        screens: {
            'tablet': '640px',

            'laptop': '1024px',

            'desktop': '1280px',
        },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [

  ],
}
