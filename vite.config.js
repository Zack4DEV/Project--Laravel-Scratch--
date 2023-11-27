import { defineConfig } from 'vite';
import usePHP from 'vite-plugin-php';

export default defineConfig({
    plugins: [
        usePHP({
           entry: [ 'config.php', 
                    'index.php', 
                    'home.php',
                    'logout.php',
                   ],
           cleanup: {},
        })
    ],
});
