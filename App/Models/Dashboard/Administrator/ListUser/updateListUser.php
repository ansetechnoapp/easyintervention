<?php

namespace App\Models\Dashboard\Administrator\ListUser;

trait updateListUser
{
  
  public function UpdateUserStatus($data){
    $status = htmlspecialchars(trim(strip_tags($data['status'])));
    $user_id  = htmlspecialchars(trim(strip_tags($data['user_id'])));

    $data = [
      'status' => $status,
      'user_id' => $user_id,
  ];

   $this->requete("UPDATE user_info SET status = :status WHERE user_id = :user_id ",$data);

  }

  public function setBtnModifActionAdmin($Btn_modif,$user_id_num){
    $data = [
      'Btn_modif' => $Btn_modif,
      'user_id_num' => $user_id_num,
  ];
    $sqlQuery = $this->requete("UPDATE form_task SET Btn_modif = :Btn_modif WHERE user_id_num = :user_id_num",$data);
    $sqlQuery = $this->requete("UPDATE namecustomer SET Btn_modif = :Btn_modif WHERE user_id_num = :user_id_num",$data);
    return $sqlQuery;
  }

  public function setBtnSupActionAdmin($Btn_Sup,$user_id_num){
    $data = [
      'Btn_Sup' => $Btn_Sup,
      'user_id_num' => $user_id_num,
  ];
    $sqlQuery = $this->requete("UPDATE form_task SET Btn_Sup = :Btn_Sup WHERE user_id_num = :user_id_num",$data);
    $sqlQuery = $this->requete("UPDATE namecustomer SET Btn_Sup = :Btn_Sup WHERE user_id_num = :user_id_num",$data);
    $sqlQuery = $this->requete("UPDATE material SET Btn_Sup = :Btn_Sup WHERE user_id_num = :user_id_num",$data);
    return $sqlQuery;
  }
}
   