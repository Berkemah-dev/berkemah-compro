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
        'mahya-green': '#10b981',
        'mahya-blue': '#3b82f6',
        'mahya-dark': '#0f172a',
      },
    },
  },
  plugins: [],
}
