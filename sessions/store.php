<?php
$subtitle = "Store Session Data";
include "top.php";
?>
        <?php
        switch ($_SERVER["REQUEST_METHOD"]) {
            case "GET":
        ?>
            <h2>Save A Number</h2>
            <form class="form-inline" method="post">
                <?php
                for ($i = 0; $i < 10; $i++) {
                ?>
                    <label class="radio">
                        <input type="radio" name="tostore" value="<?php echo $i?>">
                        <?php echo $i ?>
                    </label>
                <?php
                }
                ?>
                <input type="submit" value="submit" class="btn offset1">
            </form>
            <h2>Save A String</h2>
            <form class="form-inline" method="post">
                <input type='text' placeholder="string to save..." class="span3" name="tostore">
                <input type="submit" value="submit" class="btn">
            </form>
            <h2>Save An Array</h2>
            <form method="post">
                <input type="hidden" name="what" value="array">
                <input type="submit" value="submit" class="btn">
            </form>
            <h2>Save A Class</h2>
            <form method="post">
                <input type="hidden" name="what" value="class">
                <input type="submit" value="submit" class="btn">
            </form>
        <?php
                break;
            case "POST":
                if (array_key_exists("what", $_POST)) {
                    if ($_POST['what'] === "array") {
                        $toStore = ["1", 2, 3, "foo" => "bar"];
                    }
                    elseif ($_POST['what'] === "class") {
                        class Foo {
                            public $bar = "foobar";
                            public function show_bar() {
                                print $this->bar;
                            }
                        }
                        $toStore = new Foo();
                    }
                }
                else {
                    $toStore = $_POST["tostore"];
                }

                $_SESSION["stored"] = $toStore;
                ?>
                <h2>Session Data saved!</h2>
                <p>Check it out on <a href="view.php">the view page</a></p>
                <?php
                break;
        }
        ?>
<?php include "bottom.php" ?>
