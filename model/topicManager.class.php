<?php

class TopicManager{

    public static function getMainTopics(){
        $db = self::_connectDb();
        $results = array();
        $sql = "SELECT title, description FROM main_topic";
        $sth = $db->prepare($sql);
        $sth->execute();
        $results = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $results;
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