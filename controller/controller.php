<?php
spl_autoload_register(function($class){
    require './model/' .lcfirst($class). '.class.php';
});
function openMainPage(){ 
   $arrayTopics = TopicManager::getMainTopics();
   $arrayObjTopics = array_map(function($value){
    $countTopics = TopicManager::countTopics($value["id"]);
    $countMessages = TopicManager::countMessages($value["id"]);
    $id = $value["id"];
    $title = $value["title"];
    $description = $value["description"];
    $topic = new MainTopic($id, $title, $description, $countTopics, $countMessages);
    return $topic;
   }, $arrayTopics);
   require("./view/mainPage.php"); 
}
function listTopics($mainTopicId){
    $arrayTopics = TopicManager::getTopics($mainTopicId);
    $arrayObjTopics = array_map(function($value){
        $countMessages = TopicManager::countMessagesTopics($value["id_topic"]);
        $frenchMonths = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
        $id = $value["id_topic"];
        $title = $value["title_topic"];
        $author = $value["username"];
        $creationTimestamp = $value["datetime_topic"];
        $creationDatetime = getdate($creationTimestamp);
        $creationDay = $creationDatetime["mday"];
        $creationMonth = $frenchMonths[$creationDatetime["mon"]-1];
        $creationYear = $creationDatetime["year"];
        $creationDatetime = $creationDatetime["mday"]." ".$creationMonth." ".$creationDatetime["year"];
        $topic = new Topic($id, $title, $countMessages, $author, $creationDatetime);
        return $topic;
       }, $arrayTopics);
       session_start();
    require("./view/topicsView.php"); 
}
function listMessages($topicId){
    $arrayMessages = TopicManager::getMessages($topicId);
    $arrayObjMessages = array_map(function($value){
        $frenchMonths = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
        $id = $value["id_message"];
        $text = $value["text"];
        $author = $value["username"];
        $creationTimestamp = $value["datetime"];
        $creationDatetime = getdate($creationTimestamp);
        $creationDay = $creationDatetime["mday"];
        $creationMonth = $frenchMonths[$creationDatetime["mon"]-1];
        $creationYear = $creationDatetime["year"];
        $creationDatetime = $creationDatetime["mday"]." ".$creationMonth." ".$creationDatetime["year"];
        $message = new Message($id, $author, $text, $creationDatetime);
        return $message;
       }, $arrayMessages);
       session_start();
        require("./view/messagesView.php"); 
}
function registerUser(User $user){
    echo UserManager::addUser($user);
}
function signInUser(User $user){
    $bool = UserManager::usernameIsAlreadyRegistered($user->getUsername());
    if($bool == 1){ //true
        echo $bool;
        session_start();
        $_SESSION["username"] = $user->getUsername();
    }else{
        echo $bool;
    }
}
function signOffUser(){
    session_start();
    session_unset();
    session_destroy();
    require("./view/deconnexionView.php"); 
}

