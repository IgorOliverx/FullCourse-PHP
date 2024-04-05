import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/views/**', 'resources/views/components/**', 'resources/css/**', 'resources/js/**'],
            refresh: true,
        }),
    ],
});
