<?php

class UserManager {


    public static function addUser(User $user){
        try{
            $db = self::_connectDb();
            $username = $user->getUsername();
            $type = $user->getType();
            $usernameIsAlreadyRegistered = self::usernameIsAlreadyRegistered($username);
            if($usernameIsAlreadyRegistered == 0){
                $sql = "INSERT INTO user (username, label_type) VALUES(:username, :label_type)";
                $sth = $db->prepare($sql);
                $sth->execute(array(":username"=> $username, ":label_type"=>$type));       
                return $usernameIsAlreadyRegistered;
            }else{
                return $usernameIsAlreadyRegistered;
            }

        }
        catch(PDOException $e){
            return "Erreur : " . $e->getMessage();
        }
    }
    
    public function addBanUser(User $user, int $numberOfDays){
        $db = $this->_connectDb();
        $username = $user->getUsername();
        //Ending date of ban in Timestamp UNIX format
        $timestamp = $this->_calculateTimestampEndOfBan($numberOfDays);
        $sql = "INSERT INTO ban (date_end_ban) VALUES(:date_end_ban)";
        $sth = $db->prepare($sql);
        $sth->execute(array(":date_end_ban"=>$timestamp));
    }

    public function deleteBanUser(User $user){
        $db = $this->_connectDb();
        $username = $user->getUsername();
        $sql = "DELETE FROM ban WHERE username = :username";
        $sth = $db->prepare($sql);
        $sth->execute(array(":username"=>$username));
    }

    private function _connectDb(){
        $db = new PDO('mysql:host=localhost;dbname=miniforum;charset=utf8', 'root', '');
        return $db;
    }

    public static function usernameIsAlreadyRegistered($username){
        $db = self::_connectDb();
        $sql = "SELECT COUNT(username) AS u FROM user WHERE username = :username";
        $sth = $db->prepare($sql);
        $sth->execute(array(":username"=>$username));
        $data = $sth->fetch();
        if($data["u"]>0){
            //var_dump($data);
            return 1;
        }else if($data["u"] == 0){
            //var_dump($data);
            return 0;
        }
        
    }

    private function _calculateTimestampEndOfBan(int $numberOfDays){
        $current_timestamp = time();
        $timestamp_untilEndOfBan = 86400*$numberOfDays;
        $endOfBan_timestamp = $current_timestamp + $timestamp_untilEndOfBan;
        return $endOfBan_timestamp;
    }


}