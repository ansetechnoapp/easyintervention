<?php

namespace App\Controller\passwordForgot;

trait setPasswordForgot
{
    public function CheckExistEmailUpdate($data){
        $email= htmlspecialchars(trim(strip_tags($data['email'])));
        $checkExistEmail= $this->setCheckExistEmail($email); 
      if ($checkExistEmail->rowCount()> 0) {
        echo "<script>location.href='passUpdate?update=$email';</script>";
      }else{
        echo "email incorrecte";
      }
      }
  
}