<?php

class Topic {
    private $title;
    private $countMessages;

    public function __construct($t, $cm){
        $this->title = $t;
        $this->countMessages = $cm;
    }

    public function setTitle($t){
        $this->title = $t;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getCountMessages(){
        return $this->countMessages;
    }
    
}