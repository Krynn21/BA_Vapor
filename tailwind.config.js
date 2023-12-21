/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}" ,"./node_modules/flowbite/**/*.js", "./**/*.{html,js,php}"],
  theme: {
    extend: {
      animation: {
        timer: 'timer 18s linear',
      },
      keyframes: {
        timer: {
          '0%': { transform: 'translateY(0%)' },
          '100%': { transform: 'translateY(-200%)' },
        },
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
]
}