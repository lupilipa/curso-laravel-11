/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
          // Configure your color palette here
          'light-primary': '#E5E5E5',
          'light-orange': '#FF5722',
          'light-purple': '#6A5ACD',
          'light-purple-light': '#D8BFD8',
          'light-purple-dark': '#4B0082',
          'light-second': '#A9A9A9',
          'light-third': '#696969',

          // Cores para Modo Escuro
          'dark-primary': '#2C2C2C',
          'dark-primar': '#3E3D3D',
          'dark-orange': '#FF7043',
          'dark-purple': '#8A2BE2',
          'dark-purple-light': '#B19CD9',
          'dark-purple-dark': '#301934',
          'dark-second': '#B0B0B0',
          'dark-third': '#101010',
        },
      },
    },
    plugins: [],
}