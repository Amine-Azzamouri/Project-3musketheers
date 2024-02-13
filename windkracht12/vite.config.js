import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
<<<<<<< HEAD
                'resources/css/app.css',
                'resources/js/app.js',
=======
                'resources/scss/main.scss',
                'resources/js/modal.css',
                'resources/js/app.js',
                'resources/js/modal.js'
>>>>>>> 3cd4f500b90d18b356b1addd90ad174ac5786e0c
            ],
            refresh: true,
        }),
    ],
});
