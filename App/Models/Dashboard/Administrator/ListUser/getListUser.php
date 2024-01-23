<?php

namespace App\Models\Dashboard\Administrator\ListUser;

   trait getListUser
{
  
    public function listUser()
    {
      $sqlQuery = $this->requete("SELECT  DISTINCT a.Btn_modif,a.Btn_Sup,a.user_id_num,b.* FROM form_task a,user_info b
  WHERE  a.user_id_num = b.user_id");
      return $sqlQuery->fetchAll();
    }
}
