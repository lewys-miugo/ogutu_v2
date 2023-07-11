const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
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
    },

    plugins: [require("@tailwindcss/forms", "flowbite/plugin")],
};
