<?php

class User {
    private $username;
    private $type;

    public function __construct($u, $t){
        $this->username = $u;
        $this->type=$t;
    }

    public function setUsername($u){
        $this->username = $u;
    }
    public function setType($t){
        $this->type = $t;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getType(){
        return $this->type;
    }
}