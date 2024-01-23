<?php

namespace App\Controller\Dashboard\Administrator\ListUser;

 
trait updateListUser
{
  
    public function BtnModifActionAdmin($data){
        $Btn_modif = htmlspecialchars(trim(strip_tags($data['Btn_modif'])));
        $user_id_num = htmlspecialchars(trim(strip_tags($data['user_id_num'])));
        $result = $this-> setBtnModifActionAdmin($Btn_modif,$user_id_num);
        if ($result) {
          echo "<script>location.href='ViewTaskListUserAction';</script>";
      } else {
      echo "Erreur : " . $result . "<br>";
      } 
      }
      
      public function BtnSupActionAdmin($data){
        $Btn_Sup = htmlspecialchars(trim(strip_tags($data['Btn_Sup'])));
        $user_id_num = htmlspecialchars(trim(strip_tags($data['user_id_num'])));
        $result = $this-> setBtnSupActionAdmin($Btn_Sup,$user_id_num);
        if ($result) {
          echo "<script>location.href='ViewTaskListUserAction';</script>";
      } else {
      echo "Erreur : " . $result . "<br>";
      }
      }
}
  


  