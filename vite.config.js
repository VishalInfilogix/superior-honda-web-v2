import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss', // If you have SCSS or CSS, include it here
                'resources/js/app.js',      // Your main JS file
            ],
            refresh: true, // Automatically refresh the page during development
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js', // Ensure Vue 3 is properly aliased
        },
    },
});
