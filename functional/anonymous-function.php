<?php
function helloWorld() {
    print "Hello Procedural World";
}

$helloWorld = function() {
    print "Hello Functional World";
};

?>
<!DOCTYPE html>
<html>
<head>
    <title>Anonymous Function</title>
</head>
    <body>
        <h2>Using A Regular Function</h2>
        <?php helloWorld(); ?>
        <h2>Using An Anonymous Function</h2>
        <?php $helloWorld(); ?>
        <h2>Pass The Function To Another Variable</h2>
        <?php
        $myFunc = $helloWorld;
        $myFunc();
        ?>
    </body>
</html>
