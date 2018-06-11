<?php
    
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Query
 *
 * @author TSPCC
 */
class Query {
    
    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    public function returnRows($query, $array = [], $returnRows = false){
        
        if(isset($query)){
            $stm = $this->pdo->prepare($query);
        }
        if(!empty($array)){
            $stm->execute($array);
        }else{
            $stm->execute();
        }
       
        if($stm->rowCount() > 0){
            return $returnRows ? $stm->fetch(PDO::FETCH_OBJ) : $stm->fetchAll(PDO::FETCH_OBJ); 
        }
    }
    public function runQuery($query, $array = []){
        

        if(isset($query)){
            $stm = $this->pdo->prepare($query);
        }
        if(!empty($array)){
            $result = $stm->execute($array);
        }else{
            $result = $stm->execute();
        }
        return $result; 
    }
    
}
