<?php

namespace App\Models\FormSignIn;

trait getFormSignIn
{
  
    public function getCheckExistEmailPseudo($emailPseudo)
    {
      $data = [
        'pseudo' => $emailPseudo,
        'email' => $emailPseudo,
      ];
      $sqlQuery = $this->requete("SELECT email,pseudo from  user_info WHERE email = :email OR pseudo = :pseudo", $data);
      if ($sqlQuery->rowCount() > 0) {
        return true;
      } else {
        return false;
      }
    }
    public function getCheckStatus($emailPseudo)
  {
    $data = [
      'pseudo' => $emailPseudo,
      'email' => $emailPseudo,
    ];
    $sqlQuery = $this->requete("SELECT status from  user_info WHERE email = :email OR pseudo = :pseudo", $data);
    $result = $sqlQuery->fetch(\PDO::FETCH_ASSOC);
    if (isset($result['status']) && $result['status'] == 'Activer') {
      return true;
    } else {
      return false;
    }
  }

  public function UserLoginAutho($emailPseudo, $password)
  {
    $password = SHA1($password);
    $data = [
      'pseudo' => $emailPseudo,
      'email' => $emailPseudo,
      'motdepasse' => $password,
    ];
    $sqlQuery = $this->requete("SELECT * FROM user_info WHERE motdepasse = :motdepasse and email = :email OR  pseudo = :pseudo LIMIT 1", $data);
    return $sqlQuery->fetch(\PDO::FETCH_OBJ);
  }
}