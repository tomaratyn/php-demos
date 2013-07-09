# PHP Database Objects (PDO)

Some demos of how to use `PDO`. `PDO` lets us connect to any database we want (though in this case it's hardcoded to use
a MySQL database) and offers prepared statements.

Note that in order to keep credentials safe all the files `require "database.config.php"` which does not exist (is
not get checked into the repo). Create this file your self, based on database.config.php.example.

Please also remember that these are `PDO` demos, not how to build a user management system demo. There are numerous
convenient but likely incorrect assumptions made in these demos in order put the focus on `PDO` not on the complexities
of user management.

For the details of `PDO` please consult the [PHP PDO Documentation](http://php.net/manual/en/book.pdo.php)

## Credentials

In order to get this code to connect to the database you must rename `database.config.php.example` to
`database.config.php` and then fill in the variables correctly with your username, database (probably the
same as your password), and the address of your Database server.

## Schema

All these examples use the schema provided in `schema.sql`.

