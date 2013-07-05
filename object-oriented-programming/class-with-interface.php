<?php
interface Nameable {
    public function get_name();
    public function set_name($name);
}

class Contact implements Nameable {
    public $first_name;
    public $last_name;
    public $phone_number;
    public function __construct($first_name = null, $last_name = null) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
    public function get_name() {
        return $this->first_name . " " . $this->last_name;
    }
    public function set_name($name) {
        $split_name = explode(" ", $name, 2);
        $length = count($split_name);
        $rv = true;
        if ($length === 0) {
            $rv = false;
        }
        elseif ($length === 1) {
            $this->first_name = $this->last_name = $split_name[0];
        }
        else {
            $this->first_name = $split_name[0];
            $this->last_name = $split_name[1];
        }
        return $rv;
    }
    public function __toString() {
        $s = "";
        if ($this->first_name) {
            $s .= $this->first_name;
        }
        if ($this->last_name) {
            if (count($s) > 0) {
                $s .= " ";
            }
            $s.= $this->last_name;
        }
        if ($this->phone_number) {
            if (count($s) > 0) {
                $s .= ": ";
            }
            else {
                $s .= "Someone's Phone Number: ";
            }
            $s .= $this->phone_number;
        }
        return $s;
    }
}
?>
<!doctype html>
<html>
    <head>
        <title>Object Oriented Programming - Class with Interface</title>
    </head>
    <body>
        <strong>A Simple Class, Empty Constructor, Two Names</strong>
        <br>
        <?php
        $john23 = new Contact();
        $john23->set_name("Angelo Roncalli");
        $john23->phone_number = "777-777-7777";
        ?>
        <p><?php print $john23 ?></p>
        <strong>A Simple Class, Empty Constructor, Three Names</strong>
        <br>
        <?php
        $john23 = new Contact();
        $john23->set_name("Angelo Giuseppe Roncalli");
        $john23->phone_number = "777-777-7777";
        ?>
        <p><?php print $john23 ?></p>
        <strong>A Simple Class, Parameterized Constructor</strong>
        <br>
        <?php
        $john23 = new Contact("Angelo", "Roncalli");
        $john23->phone_number = "777-777-7777";
        ?>
        <p><?php print $john23 ?></p>
    </body>
</html>
