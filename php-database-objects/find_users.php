<!doctype html>
<html>
<head>
    <title>PDO Examples - Show a list of users.</title>
</head>
<body>
    <form>
        <label>
            Username: <input type="text" name="username">
        </label>
    </form>
    <?php  if (array_key_exists("username", $_GET)) { ?>
    <ul>
        <?php
        require "database.config.php";
        $dbh = new PDO("mysql:host=" . $database_config_host . ";dbname=" . $database_config_database,
                         $database_config_username,
                         $database_config_password);
        $stmt = $dbh->prepare("SELECT * FROM user WHERE username LIKE ?");
        // also try this:
        //$stmt = $dbh->prepare("SELECT * FROM user WHERE username LIKE '?'");
        // What happens?
        $stmt->execute(array( "%".$_GET["username"]."%"));
        try {
            foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
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
    <?php
    }
    ?>
    </ul>
</body>
</html>