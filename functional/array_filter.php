<?php 
$full_names = array("Giovanni Maria Mastai-Ferretti",
                    "Karol Jozef Wojtyla",
                    "Vincenzo Gioacchino Raffaele Luigi Pecci",
                    "Giovanni Angelo Braschi", "Adrian",
                    "Niccolo Maria Luigi Chiaramonti");
?>
<!DOCTYPE html>
<html>
<head>
  <title>array_filter()</title>
</head>
<body>
    <h2>Given a list of names:</h2>
    <pre>
<?php print_r($full_names); ?>
    </pre>
    <h2>Here are the names which have double letters:</h2>
    <pre>
<?php print_r(array_filter($full_names, function($name) {
    $allNames = explode(" ", $name);
    $name_with_double_letter = array_filter($allNames, function($singleName) {
        $unique_letters_in_name = array_unique(str_split($singleName));
        return count($unique_letters_in_name) < strlen($singleName);
    });
    return count($name_with_double_letter) > 0;
})); ?>
    </pre>
</body>
</html>