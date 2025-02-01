import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';
import path from 'path';

// Function to get all files in a directory
function getFiles(dir) {
    return fs.readdirSync(dir).map(file => path.join(dir, file));
}

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                ...getFiles('resources/images'),
                ...getFiles('resources/videos'),
            ],
            refresh: true,
        }),
    ],
});
