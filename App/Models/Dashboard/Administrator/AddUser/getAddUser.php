<?php

  namespace App\Models\Dashboard\Administrator\AddUser;
  
  trait getAddUser {
    public function checkExistPseudo($pseudo)
  {
    $data = [
      'pseudo' => $pseudo,
    ];
    $sqlQuery = $this->requete("SELECT pseudo from  user_info WHERE pseudo = :pseudo", $data);
    if ($sqlQuery->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }
    }