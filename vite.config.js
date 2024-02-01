import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        })
    ],
    build: {
        outDir: path.resolve(__dirname, 'public'), // Pasta de saída geral
        assetsDir: 'assets', // Pasta onde os assets serão colocados dentro de 'public'
    },
});
