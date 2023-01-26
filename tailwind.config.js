/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",],
  theme: {
    extend: {
      colors: {
        laravel: '#5A0000',
      },
    },
  },
  plugins: [],
}

