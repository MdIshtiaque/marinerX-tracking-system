import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/dist/assets/app-f888e93a.css' ,
                'public/dist/assets/app-4a08c204.js'
            ],
            refresh: true,
        }),
    ],
});
