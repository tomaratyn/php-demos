<?php 
function greeter($name) {
    $formated_name = ucwords($name);
    return function() use ($formated_name) {
      print "Hello " . $formated_name;
    };
}
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Closure</title>
    </head>
    <body>
        <h2>Say Hello to Angelo</h2>
        <?php
        $angelos_greeter = greeter("angelo guiseppe roncalli");
        $angelos_greeter();
        ?>
        <h2>Say Hello to Giovanni</h2>
        <?php
        $giovanni_greeter = greeter("giovanni montini");
        $giovanni_greeter();
        ?>
    </body>
</html>