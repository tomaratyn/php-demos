# Sending HTTP Headers

The [`header()`](http://ca2.php.net/manual/en/function.header.php) function lets us set in PHP.

This demo shows how to send an HTTP `Location` Header, which will redirect you to another page. Note that you **cannot** send headers after you've already shown any output (event some whitespace before your first `<?php ` tag will cause an error to occur).

## `send_post_request.sh`

This is a simple shell script which will use CURL to send a POST request to your whatever URL you provide as the first argument. It will show both headers and body of the response.

Example usage:

    $ ./send_post_request.sh mysite.example.org/php-demos/header/location_header.php
    

