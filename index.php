<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <p>
            <?php
                echo "Hello World";
                echo  "Hello," . " " . "world" . "!";
                echo 5 * 7;
            ?>
        </p>

            <?php
                  $myname = "Frodo Baggins";
                  $myage = 111;
                  echo "My name is" . $myname . "and I am" . $myage;

             ?>

        <p>
            <?php
                echo "I get printed!";
            //I don't I'm a comment.

            /* I don't get printed either
            and neither do I */
            ?>

        </p>

        <?php
        $name = "Edgar";

        if ($name == "Simon") {
            print "I know you!";
        }
        else {
            print "Whoo are you?";
        }
        ?>


    </body>
</html>