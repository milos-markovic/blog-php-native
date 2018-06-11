<?php
    
    session_start();
    require_once "Query.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Session
 *
 * @author TSPCC
 */
class Session extends Query {
    
    public function login($inputFields){
        
        $email = trim($inputFields['email']);
        $password = trim(md5($inputFields['password']));
        
        $query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $array = [
            ':email' => $email,
            ':password' => $password
        ];
        $user = $this->returnRows($query, $array, true);
        return $user ? $this->setSession($user) : [];
    }
    public function setSession($user){
        if(is_object($user)){
            
            $_SESSION['userId'] = $user->id;
            $_SESSION['issetSession'] = true;
            return true;
        }
        return false;
    }
    public function issetSession(){

        return isset($_SESSION['userId']);
    }
    public function logout(){

        if(isset($_SESSION['userId'])){
            session_destroy();
            $_SESSION = [];
            return true;
        }
    }
}
