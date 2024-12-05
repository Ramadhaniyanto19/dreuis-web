/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "custom-blue": "#0B4D8C",
                "custom-green": "#A8D36A",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
