import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/main.scss',
                'resources/js/modal.css',
                'resources/js/app.js',
                'resources/js/modal.js'
            ],
            refresh: true,
        }),
    ],
});
