// tailwind.config.js
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        // TAMBAHKAN BARIS INI:
        "./vendor/power-components/livewire-powergrid/resources/views/**/*.php",
        "./vendor/power-components/livewire-powergrid/src/Themes/Tailwind.php",
    ],
    darkMode: "class", // Pastikan ini 'class'
    theme: {
        extend: {
            colors: {
                // Gunakan Zinc atau Slate agar lebih menyatu dengan Dark Mode Flux/Daisy
                "pg-primary": require("tailwindcss/colors").zinc,
            },
        },
    },
};
