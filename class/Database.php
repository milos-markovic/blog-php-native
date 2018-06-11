<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author TSPCC
 */
class Database {
    
    public function connectDB(){
        
        $dsn = 'mysql:host=localhost;dbname=blog6';
        $username = 'root';
        $password = '';
        
        try{
            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            $e->getMessage();
        }
    }
}
