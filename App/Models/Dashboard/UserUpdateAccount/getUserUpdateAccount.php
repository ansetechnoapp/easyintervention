<?php

namespace App\Models\Dashboard\UserUpdateAccount;

use includes\session;

trait getUserUpdateAccount
{
    public function ListUserInfo()
    {
      $user_id_num = session::get('user_id');
      $sqlQuery = $this->requete("SELECT * from  user_info WHERE user_id = '$user_id_num'");
      return $sqlQuery->fetchAll();
    }

    public function checkExistNum($num)
  {
    $data = [
      'mobile' => $num,
    ];
    $sqlQuery = $this->requete("SELECT mobile from  user_info WHERE mobile = :mobile", $data);
    $result = $sqlQuery->rowCount();
    if ($result > 0 && $result < 2) {
      return true;
    } else {
      return false;
    }
  }

  public function checkVerifyNumUser($num, $user_id)
  {
    $data = [
      'mobile' => $num,
      'user_id' => $user_id,
    ];
    $sqlQuery = $this->requete("SELECT * from  user_info WHERE mobile = :mobile AND user_id = :user_id", $data);
    $result = $sqlQuery->fetch(\PDO::FETCH_ASSOC);
    if (isset($result['mobile'])) {
      if ($result['mobile'] == $num) {
        return true;
      }
    } else {
      return false;
    }
  }

  public function checkExistEmail($email)
  {
    $data = [
      'email' => $email,
    ];
    $sqlQuery = $this->requete("SELECT email from  user_info WHERE email = :email", $data);
    $result = $sqlQuery->rowCount();
    if ($result > 0 && $result < 2) {
      return true;
    } else {
      return false;
    }
  }

  public function checkVerifyEmailUser($email, $user_id)
  {
    $data = [
      'email' => $email,
      'user_id' => $user_id,
    ];
    $sqlQuery = $this->requete("SELECT * from  user_info WHERE email = :email AND user_id = :user_id", $data);
    $result = $sqlQuery->fetch(\PDO::FETCH_ASSOC);
    if (isset($result['email'])) {
      if ($result['email'] == $email) {
        return true;
      }
    } else {
      return false;
    }
  }
}