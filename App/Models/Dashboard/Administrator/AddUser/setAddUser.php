<?php

  namespace App\Models\Dashboard\Administrator\AddUser;
  
  trait setAddUser {
    public function setaddAdminUser($password,$pseudo){
        
      $sqlQuery = $this->requete("INSERT INTO user_info ( motdepasse, pseudo) 
      VALUES ('$password','$pseudo')");
      return $sqlQuery;
    }
    }