<?php

namespace App\Controller\Dashboard\ViewTask;

trait deleteViewTask
{
  public function BtnSupTask($data){
    
    $user_id_num = htmlspecialchars(trim(strip_tags($data['user_id_num'])));
    $Id_task = htmlspecialchars(trim(strip_tags($data['Id_task'])));
    $result = $this-> setBtnSupTask($user_id_num,$Id_task);
    if ($result) {
      echo "<script>location.href='ViewTask';</script>";
  } else {
  echo "Erreur : " . $result . "<br>";
  }
  } 
  
}