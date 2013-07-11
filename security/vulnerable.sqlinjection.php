<!doctype html>
<html>
<head>
    <title>Security - Insecure User Authentication</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && array_key_exists("username", $_POST) &&
    array_key_exists("password", $_POST))
{ ?>
    <?php
    require_once "database.config.php";
    $link = mysql_connect($database_config_host, $database_config_username, $database_config_password);
    $selectDB = mysql_select_db($database_config_database);
    $query = "SELECT * FROM user WHERE username = '" . $_POST["username"] . "' AND password = '" .
        $_POST["password"] . "';";
    $result = mysql_query($query, $link);
    $row = mysql_fetch_assoc($result);
    if ($row) {
    ?>
        <h1>Hey, I know you!</h1>
        <h3>&lt;Here is a whole load of secrets&gt;</h3>
        <a href="./vulnerable.sqlinjection.php">Try this again.</a>
    <?php
    }
    ?>
<?php
}
else {?>
    <p>Try this as your username:</p>
    <pre>' OR 1 = 1 #</pre>
    <h2>Remember trying to hack a system that you do not own and you do not have permission to test is ILLEGAL.<br>Be cool and stay in school!</h2>
    <form method="POST">
        <label>
            Username: <input type="text" name="username">
        </label>
        <label>
            Password: <input type="password" name="password">
        </label>
        <input type="submit">
    </form>
<?php } ?>
</body>
</html>