<?php

require("./controller/controller.php");

if(isset($_GET["action"])){
    if($_GET["action"] == "register"){
        $username = $_GET["username"];
        $user = new User($username, "Membre");
        registerUser($user);
    } else if($_GET["action"] == "login"){
        $username = $_GET["username"];
        $user = new User($username, "Membre");
        signInUser($user);
    }
}else{
    openMainPage();
}
