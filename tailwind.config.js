const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily:
            {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage:
            {
                beetle:
                  "url('https://custom.image/name.jpg')"
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
    variants: {},
    plugins: [],

};

