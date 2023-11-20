/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    container: {
      center: true,
    },
    extend: {
      fontFamily: {
        open_sans: ['"Open Sans"'],
      },
      colors: {
        body: "#F0F2F9",
        main: "#00BCF1",
        "main-smoke-white": "#EBEBEB",
        "main-gray": "#292930",
        "main-blue": "#5956E8"
      },
      boxShadow: {
        main: "0px 18.078041076660156px 35.09267044067383px -21.26828384399414px rgba(0, 0, 0, 0.25)",
      },

      screens: {
        s: "375px",
        m: "400px",
      },
    },
  },
  plugins: [
    require('flowbite/plugin'),
    "prettier-plugin-tailwindcss"
  ],
};
