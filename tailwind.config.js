/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                sm: "480px",
                md: "768px",
                lg: "1024px",
                xl: "1280px",
            },
            spacing: {
                big: "48rem",
            },
        },
    },
    plugins: [],
};
