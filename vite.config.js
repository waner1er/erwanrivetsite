import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/style.scss',
                'resources/js/front.js',

                'resources/css/app.css',
                'resources/js/admin.js',
            ],
            refresh: true,
        }),
    ],
});
