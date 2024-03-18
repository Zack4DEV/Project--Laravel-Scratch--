import { defineConfig } from 'vite';
import usePHP from 'vite-plugin-php';

export default defineConfig({
    plugins: [
        usePHP({
           entry: [ 'index.php', 
                    'home.php',
                    'admin/admin.php',
                    'admin/dashboard.php',
                    'admin/exportdata.php',
                    'admin/invoiceprint.php',
                    'admin/logout.php',
                    'admin/paymantdelete.php',
                    'admin/paymant.php',
                    'admin/room.php',
                    'admin/roombook.php',
                    'admin/roombookdelete.php',
                    'admin/roombookedit.php',
                    'admin/roomconfirm.php',
                    'admin/roomdelete.php',
                    'admin/staff.php',
                    'admin/staffdelete.php',
                   'logout.php',
                   'config.php'
                  ],
           cleanup: {},
        })
    ],
});
