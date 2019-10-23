<?php

class Topic {
    private $id;
    private $title;
    private $countMessages;
    private $author;
    private $creationDatetime;

    public function __construct($id, $t, $cm, $a, $cdt){
        $this->id = $id;
        $this->title = $t;
        $this->countMessages = $cm;
        $this->author = $a;
        $this->creationDatetime = $cdt;
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
    public function getAuthor(){
        return $this->author;
    }
    public function getCreationDatetime(){
        return $this->creationDatetime;
    }
    public function getId(){
        return $this->id;
    }
}