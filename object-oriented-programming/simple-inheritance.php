<?php
abstract class BaseContact {
    abstract public function get_name();
    abstract public function set_name($name);
    public $phone_number;
    public function __toString() {
        $s = "" . $this->get_name();
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

class PersonContact extends BaseContact {
    public $first_name;
    public $last_name;
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
}

class OrganizationContact extends BaseContact {
    public $name;
    public function __construct($name=null) {
        $this->name = $name;
    }
    public function get_name() {
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
}

?>
<!doctype html>
<html>
    <head>
        <title>Object Oriented Programming - Simple Class</title>
    </head>
    <body>
    <strong>Person Contact, Empty Constructor, Two Names</strong>
    <br>
    <?php
    $john23 = new PersonContact();
    $john23->set_name("Angelo Roncalli");
    $john23->phone_number = "777-777-7777";
    ?>
    <p><?php print $john23 ?></p>
    <strong>Person Contact, Empty Constructor, Three Names</strong>
    <br>
    <?php
    $john23 = new PersonContact();
    $john23->set_name("Angelo Giuseppe Roncalli");
    $john23->phone_number = "777-777-7777";
    ?>
    <p><?php print $john23 ?></p>
    <strong>Person Contact, Parameterized Constructor</strong>
    <br>
    <?php
    $john23 = new PersonContact("Angelo", "Roncalli");
    $john23->phone_number = "777-777-7777";
    ?>
    <p><?php print $john23 ?></p>
    <strong>Organization Contact, Empty Constructor</strong>
    <?php
    $parish = new OrganizationContact();
    $parish->set_name("Parish");
    $parish->phone_number = "777-777-7777";
    ?>
    <p><?php print $parish ?></p>
    <strong>Organization Contact, Parameterized Constructor</strong>
    <br>
    <?php
    $parish = new PersonContact("Parish");
    $parish->phone_number = "777-777-7777";
    ?>
    <p><?php print $parish ?></p>
    </body>
</html>
