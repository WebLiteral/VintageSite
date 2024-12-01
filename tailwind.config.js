import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'vintage-navy': '#31323c',
                'vintage-red' : '#7e1914',
                'vintage-red-shine' : '#974b47',
                'vintage-teal' : '#2d7672',
                'vintage-grey' : '#524546',
                'vintage-white' : '#f7f2f2',
                'vintage-darkgray' : '#16161c',
                'vintage-steel' : '#6e6e7d',
                'vintage-black': '#101010',


            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            spacing: {
                '1.5': '0.375rem', // This is the equivalent of 6px
              },


        },
    },

    plugins: [
        function ({ addUtilities }) {
            addUtilities({
                '.bg-checkered': {
                    'background-image': 'repeating-conic-gradient(#000000 0% 25%, #ffffff 0% 50%)',
                    'background-position': '0 0, 16px 16px',
                    'background-size': '32px 32px',
                    'background-color': '#ffffff',
                },
                '.bg-stripe': {
                    'background-image': 'linear-gradient(0deg, transparent 50%, #000000 50%)',
                    'background-size': '30px 30px',
                    'background-color': '#ffffff',
                },
            })
        },
    ]
};

