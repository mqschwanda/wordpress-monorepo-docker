/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.{php,html,js,jsx,ts,tsx}',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
