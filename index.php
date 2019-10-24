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
    } else if($_GET["action"] == "listTopics"){
        $mainTopicId = $_GET["id"];
        listTopics($mainTopicId);
    } else if($_GET["action"] == "listMessages"){
        $topicId = $_GET["id"];
        listMessages($topicId);
    } else if($_GET["action"] == "signOff"){
        signOffUser();
    } else if($_GET["action"] == "createTopic"){
        $mainTopicId = $_GET["id"];
        createTopic();
    } else if($_GET["action"] == "createTopic_trt"){
        createTopic_trt();
    }
}else{
    openMainPage();
}
