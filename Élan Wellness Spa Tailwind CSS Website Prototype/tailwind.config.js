/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.html"
  ],
  theme: {
    extend: {
      colors: {
        primary: "#7A9E7E",
        secondary: "#C8A96A",
        background: "#FCFBF8",
        accent: "#F5F1EA",
        text: "#2E2E2E",
      },

      fontFamily: {
        heading: ["Playfair Display", "serif"],
        body: ["Poppins", "sans-serif"],
      },

      boxShadow: {
        soft: "0 10px 30px rgba(0,0,0,0.08)",
      },

      borderRadius: {
        xl2: "20px",
      },
    },
  },
  plugins: [],
};
