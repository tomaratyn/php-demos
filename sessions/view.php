<?php
$subtitle = "View Session Data";
include "top.php";
?>
    <?php
    $session_cleared = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["clearSession"]) {
        session_destroy();
        session_start();
        $session_cleared = true;
    }
    ?>
    <h1>View Session</h1>
    <?php
    if ($session_cleared) {
        ?>
        <p><span class="label label-success">Success</span> Session Cleared!</p>
        <?php
    }
    ?>
    <pre>
<?php
    var_dump($_SESSION);
    ?>
    </pre>
    <form method="post">
        <input type="submit" value="Clear Session" name="clearSession" class="btn">
    </form>
<? include "bottom.php" ?>
