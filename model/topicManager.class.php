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

    public static function countMessages($topicId){
        $db = self::_connectDb();
        $sql = "SELECT COUNT(id_message) AS cnt FROM message m, topic t WHERE m.id_topic = t.id_topic AND t.id = ?";
        $sth = $db->prepare($sql);
        $sth->execute(array($topicId));
        $result = $sth->fetch();
        return $result["cnt"];
    }

    public static function getTopics(){

    }

    public static function getMessages(){

    }

    private function _connectDb(){
        $db = new PDO('mysql:host=localhost;dbname=miniforum;charset=utf8', 'root', '');
        return $db;
    }
}