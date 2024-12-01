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
                'vintage-red': '#7e1914',
                'vintage-red-shine': '#974b47',
                'vintage-yellow': '#ae6b37',
                'vintage-yellow-shine': '#c07d48',
                'vintage-teal': '#2d7672',
                'vintage-teal-shine': '#50837f',
                'vintage-blue': '#2d525c',
                'vintage-blue-shine': '#475d6c',
                'vintage-grey': '#523d44',
                'vintage-grey-shine': '#674a56',
                'vintage-wine': '#472b32',
                'vintage-wine-shine': '#5d3946',
                'vintage-white': '#f7f2f2',
                'vintage-ivory': '#d6cece',
                'vintage-cream': '#f0daae',
                'vintage-beige': '#d4a581',
                'vintage-darkgray': '#16161c',
                'vintage-steel': '#6e6e7d',
                'vintage-black': '#101010',


            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                verdana: ['Verdana', 'Geneva', 'sans-serif'],
            },

            spacing: {
                '1.5': '0.375rem',
                '3': '0.2rem',
            },


        },
    },

    plugins: [
        function ({ addUtilities, theme }) {
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

                '.border-r-3': {
                    borderRightWidth: theme('spacing.3'),
                },
                '.border-y-3': {
                    borderTopWidth: theme('spacing.3'),
                    borderBottomWidth: theme('spacing.3'),
                },

            }
            )
        },
    ]
};

