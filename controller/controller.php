<?php
spl_autoload_register(function($class){
    require './model/' .lcfirst($class). '.class.php';
});
function openMainPage(){ 
   $arrayTopics = TopicManager::getMainTopics();
   $arrayObjTopics = array_map(function($value){
    $countTopics = TopicManager::countTopics($value["id"]);
    $countMessages = TopicManager::countMessages($value["id"]);
    $title = $value["title"];
    $description = $value["description"];
    $topic = new Topic($title, $description, $countTopics, $countMessages);
    return $topic;
   }, $arrayTopics);
   require("./view/mainPage.php"); 
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
