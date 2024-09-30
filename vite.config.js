import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/main.scss',
                'resources/css/main.css',
                'resources/js/app.js',
                'resources/js/bootstrap.js',
                'resources/js/hurt.js',
                'resources/js/main.js',

                'resources/js/filtr.js',
                'resources/js/header-menu.js',

                'resources/views/admin'
            ],
            refresh: true,
        }),
    ],
});
