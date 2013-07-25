<?php
$full_names = array("Giovanni Maria Mastai-Ferretti",
    "Karol Jozef Wojtyla",
    "Vincenzo Gioacchino Raffaele Luigi Pecci",
    "Giovanni Angelo Braschi", "Adrian",
    "Niccolo Maria Luigi Chiaramonti");

function super_emphasis($n) {
    return function($word) use ($n) {
      return strtoupper($word) . str_repeat("!", $n);
    };
}

$three_exclaim_emphasizer = super_emphasis(3);
$six_exclaim_emphasizer = super_emphasis(6);
?>
<!DOCTYPE html>
<html>
<head>
  <title>array_map</title>
</head>
<body>
    <h2>Full Names</h2>
    <pre>
    <?php print_r($full_names); ?>
    </pre>
    <h2>Emphasized Names</h2>
    <pre>
    <?php print_r(array_map($three_exclaim_emphasizer, $full_names)); ?>
    </pre>
    <h2>Even More Emphasized Names</h2>
    <pre>
    <?php print_r(array_map($six_exclaim_emphasizer, $full_names)); ?>
    </pre>
</body>
</html>