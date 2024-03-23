import { defineConfig } from "vite";
import usePHP from "vite-plugin-php";
import path from "path";
import mysqlx from "@mysql/xdevapi";

const config = { collection: "List", schema: "db", user: "root" };

async function instantSession() {
  var instant = mysqlx.getSession(
    collection <= "List",
    schema <= "DB",
    user <= "root",
  );
  return session
    .sql(
      `CREATE DATABASE IF NOT EXISTS ${config.schema} \n`
      `CREATE USER IF NOT EXISTS 'root'@'%' IDENTIFIED BY '${config.user}' \n`
      `GRANT ALL PRIVILEGES ON ${config.schema}.* TO '${config.user}'@'%'  \n`
      `USE ${config.schema}`,
    )
    .execute()
    .then(() => {
      return session.sql(`CREATE TABLE ${config.schema}.emp_login ( \n
                            'empid' int(10) NOT NULL,\n
                            'Emp_Email' varchar(50) NOT NULL,\n
                            'Emp_Password' varchar(50) NOT NULL,\n
                            primary key('empid')\n
                            )DEFAULT CHARSET=utf8 COLLATE='utf8_general_ci' ENGINE=MyISAM;
                            `);
    })
    .execute()
    .then(() => {
      return session.sql(`CREATE TABLE ${config.schema}.Signup ( \n
                      'UserId' int(10) NOT NULL,\n
                      'Username' varchar(50) NOT NULL,\n
                      'Email' varchar(50) NOT NULL,\n
                      'Password' varchar(50) NOT NULL,\n
                      primary key('UserId')\n
                      )DEFAULT CHARSET=utf8 COLLATE='utf8_general_ci' ENGINE=MyISAM;
  `);
    })
    .execute()
    .then(() => {
      return session.sql(`CREATE TABLE ${config.schema}.roombook ( \n
                      'id' int(10) NOT NULL,\n
                      'Name' varchar(50) NOT NULL,\n
                      'Email' varchar(50) NOT NULL,\n
                      'Country' varchar(50) NOT NULL,\n
                      'Phone' varchar(50) NOT NULL,\n
                      'RoomType' varchar(50) NOT NULL,\n
                      'Bed' varchar(50) NOT NULL,\n
                      'Meal' varchar(50) NOT NULL,\n
                      'NoofRoom' varchar(50) NOT NULL,\n
                      'cin' date NOT NULL,\n
                      'cout' date NOT NULL,\n
                      'nodays' int(10) NOT NULL,\n
                      'stat' varchar(50) NOT NULL,\n
                      primary key('id')
                      )DEFAULT CHARSET=utf8 COLLATE='utf8_general_ci' ENGINE=MyISAM;
                     `);
    })
    .execute()
    .then(() => {
      return session.sql(`CREATE TABLE ${config.schema}.payment ( \n
                          'id' int(10) NOT NULL,\n
                          'Name' varchar(50) NOT NULL,\n
                          'Email' varchar(50) NOT NULL,\n
                          'RoomType' varchar(50) NOT NULL,\n
                          'Bed' varchar(50) NOT NULL,\n
                          'NoofRoom' int(10) NOT NULL,\n
                          'cin' date NOT NULL,\n
                          'cout' date NOT NULL,\n
                          'noofdays' int(10) NOT NULL,\n
                          'roomtotal' double(8,2) NOT NULL,\n
                          'bedtotal' double(8,2) NOT NULL,\n
                          'meal' varchar(50) NOT NULL,\n
                          'mealtotal' double(8,2) NOT NULL,\n
                          'finaltotal' double(8,2) NOT NULL,\n
                          primary key('id')\n
                          )DEFAULT CHARSET=utf8 COLLATE='utf8_general_ci' ENGINE=MyISAM;
  `);
    })
    .execute()
    .then(() => {
      return session.sql(`CREATE TABLE ${config.schema}.room ( \n
                          'id' int(10) NOT NULL,\n
                          'type' varchar(50) NOT NULL,\n
                          'bedding' varchar(50) NOT NULL,\n
                          primary key('id')\n
                          )DEFAULT CHARSET=utf8 COLLATE='utf8_general_ci' ENGINE=MyISAM;
  `);
    })
    .execute()
    .then(() => {
      return session
        .sql(
          `CREATE TABLE ${config.schema}.staff ( \n
          'id' int(10) NOT NULL,\n
          'name' varchar(50) NOT NULL,\n
          'work' varchar(50) NOT NULL,\n
          primary key('id')\n
          )DEFAULT CHARSET=utf8 COLLATE='utf8_general_ci' ENGINE=MyISAM;
  `,
        )
        .execute()
        .then(() => {
          const table = session.getSchema(config.schema).getTable('emp_login');
          return table
            .insert("empid", "Emp_Email", "Emp_Password")
            .values(
              ["0", "${ secrets.STAFF_EMAIL }", "${ secrets.STAFF_PASSWD }"],
              ["1", "${ secrets.ADMIN_EMAIL }", "${ secrets.ADMIN_PASSWD }"],
            )
            .execute()
            .then(() => {
              const table2 = session
                .getSchema(config.schema)
                .getTable("Signup");
              return table2
                .insert("UserId", "Username", "Email", "Password")
                .values(["0", "${ secrets.USER_EMAIL }", "${ secrets.USER_PASSWD }"]);
            })
            .execute();
        })
        .execute();
    });
}

export default defineConfig({
  resolve: {
    alias: {
      "@admin": path.join(__dirname, "/admin"),
    },
  },
  server: {
    server: "0.0.0.0",
    port: 8080,
    hmr: {
      overlay: false,
    },
  },
  plugins: [
    usePHP({
      entry: ['index.php', 
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
    }),
  ],
});
