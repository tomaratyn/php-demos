<?php
require "database.config.php";
$dbh = new PDO("mysql:host=" . $database_config_host . ";dbname=" . $database_config_database,
                $database_config_username,
                $database_config_password);
?>

<!doctype html>
<html>
    <head>
        <title>PDO Examples - Show a list of users.</title>
    </head>
    <body>
        <ul>
        <?php
        try {
            foreach ( $dbh->query("select * from user") as $row) {
            ?>
                <li><?php print $row["id"] ?>: <?php print $row["username"]?></li>
            <?php

            }
        }
        catch (PDOException $e) {
        ?>
            <li><?php print_r($e)?></li>
        <?php
        }
        ?>
        </ul>
    </body>
</html>