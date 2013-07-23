# Using PHP Unit

This is a simple example of using PHP Unit. The code is inspired by Kent Beck's Test Driven Development By Example.

## Getting PHP Unit

I recommend you get [phpunit.phar](http://pear.phpunit.de/get/phpunit.phar). 

Installation instructions are available on the [PHP Unit documentation site](http://phpunit.de/manual/3.7/en/installation.html). But here are the details:

	wget http://pear.phpunit.de/get/phpunit.phar
	chmod +x phpunit.phar


## Executing PHP Unit

To run your PHP Unit tests run this:

    $ ./phpunit.phar MoneyTest.php
	PHPUnit 3.7.22 by Sebastian Bergmann.
	
	..
	
	Time: 0 seconds, Memory: 6.75Mb
	
	OK (2 tests, 3 assertions)
	
