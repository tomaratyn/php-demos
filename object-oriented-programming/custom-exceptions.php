<?php

class InvalidNameException extends Exception {
    public $invalidName;
    public function __construct($message, $code = 0, Exception $previous = null, $invalidName) {
        parent::__construct($message, $code, $previous);
        $this->invalidName = $invalidName;
    }
}

class Contact {
    public $first_name;
    public $last_name;
    public $phone_number;
    const invalidNamePattern= '/[0-9]/';
    public function __construct($name=null) {
        if ($name !== null) {
            $this->set_name($name);
        }
    }
    public function get_name() {
        return $this->first_name . " " . $this->last_name;
    }
    public function set_name($name) {
        $isNameInvalid = preg_match(Contact::invalidNamePattern, $name);
        if ($isNameInvalid === 1) {
            throw new InvalidNameException("Sorry, that name does't work", 0, null, $name);
        }
        else if ($isNameInvalid === false) {
            throw new Exception("Something else went wrong");
        }
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
        <title>Object Oriented Programming - Custom Exceptions</title>
    </head>
    <body>
        <strong>Everything's Fine Demo</strong>
        <br>
        <?php
        $john23 = new Contact("Angelo Roncalli");
        $john23->phone_number = "777-777-7777";
        ?>
        <p><?php print $john23 ?></p>

        <strong>Caught Exception Demo</strong>
        <br>
        <?php
        try {
            $john23 = new Contact("John 23");
        }
        catch (InvalidNameException $ine) {
            print "Here's the invalid name: " . $ine->invalidName;
            ?><pre><?php print_r($ine); ?></pre><?php
        }
        ?>
        <p><?php print_r($john23) ?></p>
        <strong>Uncaught Exception Demo</strong>
        <?php
        $john23 = new Contact("John 23");
        // nothing past this will be executed.
        ?>
    </body>
</html>
