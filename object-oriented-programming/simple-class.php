<?php
class Contact {
    public $first_name;
    public $last_name;
    public $phone_number;
    public function get_name() {
        return $this->first_name . " " . $this->last_name;
    }
    public function set_name($name) {
        $split_name = explode(" ", $name, 1);
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
        return true;
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
        <title>Object Oriented Programming - Simple Class</title>
    </head>
    <body>
    </body>
</html>
