<?php header("X-XSS-Protection: 0");
/* The above header turns off any XSS protection a browser may have. However,
   not all browsers support this header or offer XSS protection.
   It lets simple demos work more easily.
   It should never be used in production or even in development.
   While browsers' XSS protection may improve in the future you must assume
   that hackers' XSS attacks will only grow more sophisticated. You *cannot*
   count on all browsers being smart enough to protect your users.*/
?>
<!doctype html>
<html>
<head>
    <title>Security - Vulnerable To Cross Site Scripting (XSS)</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && array_key_exists("comment", $_POST) ) { ?>
    Here is your comment:
    <?php print $_POST["comment"] ?>
<?php
}
else {?>
    <p>Try this as your username:</p>
    <pre>
        &lt;script&gt;alert("Hello World")&lt;/script&gt;

        or:

        &lt;script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"&gt;&lt;/script&gt;
        &lt;script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.1/underscore-min.js"&gt;&lt;/script&gt;
        &lt;script src="dangerous.xss.js"&gt;&lt;/script&gt;
    </pre>
    <h2>Remember trying to hack a system that you do not own and you do not have permission to test is ILLEGAL.<br>Be cool and stay in school!</h2>
    <p>Put your comment below:</p>
    <form method="POST">
        <textarea name="comment"></textarea>
        <input type="submit">
    </form>
<?php } ?>
</body>
</html>