<?php

    include "../classes/User.php";

    $user = new User;

    $user->login($_POST);

    // $_POST - hold the data from the form views > register.php
    /*
        $_POST['username];
        $_POST['password'];
    */


?>