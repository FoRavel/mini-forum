<?php

class Topic {
    private $title;
    private $description;
    private $countTopics;
    private $countMessages;

    public function __construct($t, $d, $c, $cm){
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