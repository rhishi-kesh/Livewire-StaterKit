/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    darkMode: "class",
    theme: {
        extend: {
            fontFamily: {
                nunito: ['Nunito', "sans-serif"],
            },
            colors: {
                'blue': {
                  500: '#2B337D',
                },
                'orange': {
                    '500': '#DD5B1D',
                }
            },
        },
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
        },
    },
    plugins: [

    ]
}
