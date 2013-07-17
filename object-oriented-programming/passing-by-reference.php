<?php
function concat_exclamation($str) {
    $str  .= "!";
    print $str;
}

function concat_exclamation_to_each_value($arr) {
    foreach ($arr as $key => $value) {
        $arr[$key] = $value . "!";
    }
    print_r($arr);
}

function concat_exclamation_to_name($obj) {
    $obj->newname .= "!";
    print_r($obj);
}

?>
<!doctype html>
<html>
    <head>
        <title>Object Oriented Programming - Passing By Copy Vs. Passing By Reference</title>
    </head>
    <body>
        <strong>String passed to function - passed by copy</strong>
        <?php
        $str = "And on earth peace to all people of good will";
        ?>
        <ul>
            <li>Original value: <?= $str ?></li>
            <li>Modified value in function: <?php concat_exclamation($str)?></li>
            <li>Value after function: <?= $str ?></li>
        </ul>
        <strong>Array passed to function - passed by copy</strong>
        <?php
        $arr = array(
            "X" => "Andrew",
            "Knife" => "Bartholomew",
            "Staff" => "James the Younger",
            "Shell" => "James the Great",
            "Poisned Cup" => "John",
            "Noose" => "Judas",
            "Medallion" => "Jude",
            "Bags of Money" => "Matthew",
            "Battle Axe" => "Matthias",
            "Sword" => "Paul",
            "Keys" => "Peter",
            "Loaves of Bread" => "Philip",
            "Saw" => "Simon",
            "Spear" => "Thomas"
            );
        ?>
        <ul>
            <li>Original value: <pre><?php print_r($arr); ?></pre></li>
            <li>Modified value in function: <pre><?php concat_exclamation_to_each_value($arr); ?></pre></li>
            <li>Value after function: <pre><?php print_r($arr)?></pre></li>
        </ul>
        <strong>Array passed to function - passed by copy</strong>
        <?php
        class Renamed {
            public $oldname;
            public $newname;
        }
        $obj = new Renamed();
        $obj->oldname = "Simon";
        $obj->newname = "Peter";
        ?>
        <ul>
            <li>Original value: <pre><?php print_r($obj); ?></pre></li>
            <li>Modified value in function: <pre><?php concat_exclamation_to_name($obj); ?></pre></li>
            <li>Value after function: <pre><?php print_r($obj)?></pre></li>
        </ul>
    </body>
</html>
