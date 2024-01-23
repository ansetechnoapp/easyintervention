<?php

namespace App\Models\passwordForgot;

trait getpasswordForgot
{
  
    public function setCheckExistEmail($email)
    {
      $data = [
        'email' => $email,
      ];
      $sqlQuery = $this->requete("SELECT email from  user_info WHERE email = :email", $data);
      return $sqlQuery;
    }
}