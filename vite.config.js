import { defineConfig } from 'vite';
import usePHP from 'vite-plugin-php';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        usePHP({
           entry: ['config.php', 
                    'index.php', 
                    'home.php',
                    'logout.php',
                    'admin/*.php'
                   ],
           cleanup: {},
        });
    ],
});