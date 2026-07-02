/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    // Safelist: kelas warna ini dipasang secara dinamis lewat PHP
    // ({{ $project['color'] }}), jadi Tailwind perlu dipaksa tetap
    // generate kelasnya walau tidak ketemu sebagai teks utuh di file.
    safelist: [
        'bg-yellow', 'bg-blue', 'bg-pink', 'bg-mint',
    ],
    theme: {
        extend: {
            colors: {
                ink:   '#141414',   // hitam pekat untuk border & teks
                paper: '#FBF4E4',   // krem hangat untuk background
                yellow:'#FFCC00',
                blue:  '#3D5AFE',
                pink:  '#FF5C8A',
                mint:  '#7CFFCB',
            },
            fontFamily: {
                display: ['"Archivo Black"', 'sans-serif'],
                mono:    ['"Space Mono"', 'monospace'],
                body:    ['"Work Sans"', 'sans-serif'],
            },
            boxShadow: {
                brut:    '6px 6px 0 0 #141414',
                'brut-sm':'4px 4px 0 0 #141414',
                'brut-lg':'10px 10px 0 0 #141414',
            },
            rotate: {
                '-2': '-2deg',
                '2': '2deg',
                '-3': '-3deg',
                '3': '3deg',
            },
        },
    },
    plugins: [],
}
