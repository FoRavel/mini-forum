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
        session_start();
        $mainTopicId = $_GET["id"];
        if(isset($_SESSION["username"])){
            createTopic();
        }else{
            header("location: index.php?action=listTopics&id=$mainTopicId");
        }
    } else if($_GET["action"] == "createTopic_trt"){
        session_start();
        $topicId = $_GET["id"];
        $username = $_SESSION["username"];
        $currentTimestamp = time();
        $text = $_POST["text"];
        $title = $_POST["title"];
        $params = array(
            "id"=>$topicId,
            "username"=>$username,
            "timestamp"=>$currentTimestamp,
            "text"=>$text,
            "title"=>$title
        );
        createTopic_trt($params);
    }
}else{
    openMainPage();
}
