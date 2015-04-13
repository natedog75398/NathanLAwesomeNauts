<?php

    require_once (__DIR__ . "/../model/config.php");
    // require once
    unset($_SESSION["authenticated"]);
        // unset
    session_destroy();

    header("Location: " . $path . "index.php");
    // logout-user.php  for header and location
    // require once