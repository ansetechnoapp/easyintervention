<?php

namespace App\Models\passwordUpdate;

trait updatePasswordUpdate
{
  
    public function setPasswordUpdate($email,$password)
    {
  
      $data = [
        'motdepasse' => $password,
        'email' => $email,
    ];
      $sqlQuery = $this->requete("UPDATE user_info SET motdepasse = :motdepasse WHERE email =:email",$data);
      return $sqlQuery;
    }
}