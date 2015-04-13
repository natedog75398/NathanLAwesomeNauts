<?php
    require_once(__DIR__ ."/../model/config.php");
      require_once (__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()){
        header("Location: " . $path . "index.php");
        die();
    } 
    // to  create  a post
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
            
    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title',  post = '$post'");
    
    if($query){
        header("Location: " . $path . "index.php");
    }//query location
    else{
        die();
    }

//header location