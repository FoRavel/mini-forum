<?php

class TopicManager{

    public static function getMainTopics(){
        $db = self::_connectDb();
        $results = array();
        $sql = "SELECT id,  title, description FROM main_topic";
        $sth = $db->prepare($sql);
        $sth->execute();
        $results = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    } 

    public static function countTopics($mainTopicId){
        $db = self::_connectDb();
        $sql = "SELECT COUNT(id_topic) AS cnt FROM topic WHERE id = ?";
        $sth = $db->prepare($sql);
        $sth->execute(array($mainTopicId));
        $result = $sth->fetch();
        return $result["cnt"];
    }
    //main topics
    public static function countMessages($topicId){
        $db = self::_connectDb();
        $sql = "SELECT COUNT(id_message) AS cnt FROM message m, topic t WHERE m.id_topic = t.id_topic AND t.id = ?";
        $sth = $db->prepare($sql);
        $sth->execute(array($topicId));
        $result = $sth->fetch();
        return $result["cnt"];
    }
    //topics
    public static function countMessagesTopics($topicId){
        $db = self::_connectDb();
        $sql = "SELECT COUNT(id_message) AS cnt FROM message WHERE id_topic = ?";
        $sth = $db->prepare($sql);
        $sth->execute(array($topicId));
        $result = $sth->fetch();
        return $result["cnt"];
    }

    public static function getTopics($mainTopicId){
        $db = self::_connectDb();
        $results = array();
        $sql = "SELECT id_topic, title_topic, datetime_topic, username FROM topic WHERE id = ?";
        $sth = $db->prepare($sql);
        $sth->execute(array($mainTopicId));
        $results = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public static function getMessages($topicId){
        $db = self::_connectDb();
        $results = array();
        $sql = "SELECT id_message, text, datetime, username FROM message WHERE id_topic = ?";
        $sth = $db->prepare($sql);
        $sth->execute(array($topicId));
        $results = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public static function addMessage($params){
        $text = $params["text"];
        $timestamp = $params["timestamp"];
        $topicId = $params["id"];
        $username = $params["username"];
        $db = self::_connectDb();
        $sql = "INSERT INTO message(text, datetime, id_topic, username) VALUES(:text,:datetime,:topicId,:username)";
        $sth = $db->prepare($sql);
        $sth->execute(array(
            ":text" => $text,
            ":datetime" => $timestamp,
            ":topicId" => $topicId,
            ":username" => $username
        ));
    }

    private function _connectDb(){
        $db = new PDO('mysql:host=localhost;dbname=miniforum;charset=utf8', 'root', '');
        return $db;
    }
}