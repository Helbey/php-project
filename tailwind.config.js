const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/views/*.blade.php",
    ],

    theme: {
        colors: {
            dark: "#1A1A1D",
            rose: "#C3073F",
            violin: "#6F2232",
            gray: "#4E4E50",
            d_green: "#5CDB95",
            l_green: "#8EE4AF",
            white_: "#EDF5E1",
        },
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
