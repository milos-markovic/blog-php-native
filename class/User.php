<?php
   // namespace App;

    require_once 'Query.php';
     
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author TSPCC
 */
class User extends Query {
    //put your code here
    
    public function getAll(){
      $users = $this->returnRows("SELECT users.id,users.first_name,users.last_name,users.email,usertype.name FROM users JOIN usertype on usertype.id = users.usertype_id");
      return $users;
    }
    public function getUser($id){
        $user = $this->returnRows("SELECT * FROM USERS WHERE id = :id", ['id' => $id], true);
        return $user ? $user : array();
    }
    public function updateUser($inputFields, $id){
        $query = "UPDATE users SET first_name = :first_name,last_name = :last_name,email = :email WHERE id = :id";
        $array = [
            ':first_name' => trim(ucfirst($inputFields['firstName'])),
            ':last_name' => trim(ucfirst($inputFields['lastName'])),
            ':email' => trim($inputFields['email']),
            ':id' => $id
        ];
        $updateUser = $this->runQuery($query, $array);
        return $updateUser ? true : false;
    }
    public function storeUser($inputFields){
                
        $query = "INSERT INTO users(first_name,last_name,email,password,usertype_id)VALUES(:firstName,:lastName,:email,:password,:usertypeId)";
        $array = [
            ':firstName' => trim($inputFields['firstName']),
            ':lastName' => trim($inputFields['lastName']),
            ':email' => trim($inputFields['email']),
            ':password' => trim(md5($inputFields['password'])),
            ':usertypeId' => $inputFields['userType']
        ];
        return $this->runQuery($query, $array);
    }
    public function deleteUser($id){
       return $this->runQuery("DELETE FROM users WHERE id = :id", [':id' => $id]);
    }
    public function getUserType($userId){
        $query = "SELECT usertype.name FROM users JOIN usertype ON usertype.id = users.id WHERE users.id = :userId";
        $array = [
            ':userId' => $userId
        ];
        $userUsertype =  $this->returnRows($query, $array, true);
        return $userUsertype ? $userUsertype : array();
    }
    public function getUserTypes(){
        $query = "SELECT * FROM usertype";
        return $this->returnRows($query);
    }
}
