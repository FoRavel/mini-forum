<?php

class MainTopic {
    private $id;
    private $title;
    private $description;
    private $countTopics;
    private $countMessages;

    public function __construct($id, $t, $d, $c, $cm){
        $this->id = $id;
        $this->title = $t;
        $this->description = $d;
        $this->countTopics = $c;
        $this->countMessages = $cm;
    }

    public function setTitle($t){
        $this->title = $t;
    }
    public function setDescription($d){
        $this->description = $d;
    }
    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getCountTopics(){
        return $this->countTopics;
    }
    public function getCountMessages(){
        return $this->countMessages;
    }
    
}