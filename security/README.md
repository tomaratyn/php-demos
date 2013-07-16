#Security Examples

Here are two examples of PHP security vulnerabilities: [SQL Injection](https://www.owasp.org/index.php/Top_10_2013-A1-Injection) and [Cross Site Scripting (XSS)](https://www.owasp.org/index.php/Top_10_2013-A3-Cross-Site_Scripting_(XSS). These two vulnerabilities are the two most major security vulnerabilities affecting the web in general[^1] and often PHP in particular. However, they are easy to secure against.

The each vulnerability is demonstrated with a pair of files, one with prefaced with `secure` and one prefaced with `vulnerable`. `vulnerable.sqlinjection.php` demonstrates code that is vulnerable to SQL Injection.  `secure.sqlinjection.php` shows the exact same example but it is not vulnerable to SQL Injection. The XSS demo follows the same pattern.

Please remember that hacking any system that you do neither own nor have permission to test is illegal. DO NOT DO IT.

For more information check the Open Web Application Security Project at [http://OWASP.org](http://OWASP.org)

## Credentials

In order to get this code to connect to the database you must rename `database.config.php.example` to
`database.config.php` and then fill in the variables correctly with your username, database (probably the
same as your password), and the address of your Database server.


## Schema

Some of these examples use the schema provided in `schema.sql`.

[^1]: Listed as #1 and #3 in the OWASP Top 10 2013.