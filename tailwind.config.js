/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.{php,js,html}", "*.php", "./partials/**/*.{php,js,html}", "./partials/**/*.{php,js,html}"],
    theme: {
        corePlugins: {
            aspectRatio: false,
        },
        plugins: [
            require('@tailwindcss/aspect-ratio'),
        ],
        fontFamily: {
            'sans': 'Montserrat'
        },
        extend: {
            minWidth: {
                '320': '20rem',
            },
            colors: {
                'main': '#2563eb',
                'body': '111827'
            }
        },
    },
    plugins: [],
}
