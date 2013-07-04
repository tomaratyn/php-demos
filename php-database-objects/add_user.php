<?php
    $showForm = true;
    $errors = array();
    $username = null;
    $password = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if (strlen($username) == 0 ) {
            $errors["username"] = "Missing Username";
            $showForm = true;
        }
        if (strlen($password) == 0 ) {
            $errors["password"] = "Missing Password";
            $showForm = true;
        }
        if (count($errors) === 0) {
            $showForm = false;
        }
    }
    if ($showForm === false) {
        require "database.config.php";
        $dbh = new PDO("mysql:=" . $database_config_host . ";dbname=" . $database_config_database,
            $database_config_username,
            $database_config_password);
        $stmt = $dbh->prepare("INSERT INTO user(username, password) VALUES (?, ?)");
        try {
            $stmt->execute(array($username, $password));
        }
        catch (PDOException $pdoe) {
            $showForm = true;
            $errors["general"] = "Database error";
        }
    }
?>
<!doctype html>
<html>
    <head>
        <title>PDO Examples - Show a list of users.</title>
        <style>
            .error {
                color: darkred;
            }
        </style>
    </head>
    <body>
    <?php if ($showForm) { ?>
    <form method="post">
        <?php if (array_key_exists("general", $errors)) { ?>
            <span class="error"><?php print $errors["general"]; ?></span>
        <?php } ?>
        <label>
            Username: <input type="text" name="username" value="">
            <?php if (array_key_exists("username", $errors)) { ?>
            <span class="error"><?php print $errors["username"]; ?></span>
            <?php }?>
        </label>
        <br>
        <label>
            Password: <input type="password" name="password">
            <?php if (array_key_exists("password", $errors)) { ?>
            <span class="error"><?php print $errors["password"]; ?></span>
            <?php }?>
        </label>
        <br>
        <input type="submit">
    </form>
    <?php }
    else {
    ?>
        <p>Added your user. You can search for them using the <a href="find_users.php">find_users.php page</a>.</p>
    <?php
    }
    ?>
    </body>
</html>