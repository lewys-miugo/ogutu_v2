/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            // screens: {
            //     sm: "480px",
            //     md: "768px",
            //     lg: "1024px",
            //     xl: "1280px",
            // },
            // spacing: {
            //     big: "48rem",
            // },
        },
        colors: {
            bluetange: "#00063D",
            bloglink: "#EF646B",
            orangelink: "#ffa033",
            redlink: "#fb3640",
        },
        fontSize: {
            sitange: ["20px", "30px"],
            sitangeh: ["52px", "52px"],
            xsitangeh: [
                "68px",
                "68px",
                {
                    fontWeight: "900",
                },
            ],
            blog: [
                "16px",
                "24px",
                {
                    // fontWeight:'700'
                },
            ],
            sm: ["14px", "20px"],
            base: ["16px", "24px"],
            lg: ["20px", "28px"],
            xl: ["24px", "32px"],
            xxl: ["30px", "40px"],
        },
        fontFamily: {
            sanx: ["sans-serif"],
        },
        backgroundImage: {
            "pattern-1": "url('../public/images/background_pattern1.png')",
        },
    },
    plugins: [require("flowbite/plugin")],
};
