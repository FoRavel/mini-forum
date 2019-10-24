<?php

class Message{
    private $messageId;
    private $author;
    private $text;
    private $date;
    

    public function __construct($i, $a, $t, $d){
        $this->messageId = $i;
        $this->author = $a;
        $this->text = $t;      
        $this->date = $d;
    }
    
    public function getMessageId(){
        return $this->messageId;
    }
    public function getText(){
        return $this->text;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function getDate(){
        return $this->date;
    }


}