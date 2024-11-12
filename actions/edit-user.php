<?php
    include "../classes/User.php";

    $user = new User;

    $user->updates($_POST, $_FILES);
    /*
        $_POST['first_name];
        $_POST['last_name];
        $_POST['username];

        $_FILE holds the image name and the actual image
    */
        

?>