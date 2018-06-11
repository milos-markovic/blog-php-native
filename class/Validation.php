<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validation
 *
 * @author TSPCC
 */
class Validation {
    
    public $messages = [];
    public $error = true;
    
    public function validateUser($inputArray){
        $checkRequireFields = $this->checkRequireFields($inputArray);
        $valdateEmail = $this->validateEmail($inputArray);
        
        if(!$checkRequireFields || !$valdateEmail){
            return false;
        }
        return true;
    }
    
    public function checkRequireFields($inputArray){
        
        foreach($inputArray as $key => $inputField ){
           
            if(empty($inputArray[$key])){
                
                array_push($this->messages, "Polje $key je obavezno");
                $this->error = false;
            }
        }
        return $this->error;
    }
    public function validateEmail($inputArray){
        
        $email = $inputArray['email'];
        
        if(!empty($email)){
            
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                array_push($this->messages, "Unesite ispravan email");
                return false;
            }
        }
        return true;
    }
    public function validateUploadedFile($uploadedFile){
        
        if(($uploadedFile['error']) !== 0){
            array_push($this->messages, "Izaberite fajl za upload");
            return false;
        }
        return true;
    }
    public function validateUploadFileFormat($uploadedFile){
        
        if($this->validateUploadedFile($uploadedFile)){
        
            $mime_type = $uploadedFile['type']; 
            if($mime_type === "image/jpeg"){
                $this->error = true;
            }else if($mime_type === "image/gif"){
                $this->error = true;
            }else if($mime_type === "image/jpg"){
                $this->error = true;
            }else{
                $this->error = false;
            }

            if(!$this->error){
                array_push($this->messages, "File nije ispravnog formata");
            }
            return $this->error;
        }
    }
    public function validateArticle($inputArray, $uploadedFile){
        
        $checkRequireFields = $this->checkRequireFields($inputArray);
        $validateUploadFileFormat = $this->validateUploadFileFormat($uploadedFile);
        
        if(!$checkRequireFields || !$validateUploadFileFormat){
            return false;
        }
        return true;
    }
    public function validateUpdateArticle($inputArray, $uploadedFile){

        
        $checkRequireFields = $this->checkRequireFields($inputArray);
 
        if( !$checkRequireFields ){
            return false;
        }
        return true;
    }
    
}
