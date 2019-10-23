<?php

class Topic {
    private $title;
    private $description;
    private $countTopics;

    public function __construct($t, $d, $c){
        $this->title = $t;
        $this->description = $d;
        $this->countTopics = $c;
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
    
}