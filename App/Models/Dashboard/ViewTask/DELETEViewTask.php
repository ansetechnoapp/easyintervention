<?php

namespace App\Models\Dashboard\ViewTask;

trait DELETEViewTask
{
  
  public function setBtnSupTask($user_id_num,$Id_task){
    $data = [
      'Id_task' => $Id_task,
      'user_id_num' => $user_id_num,
  ];
    $sqlQuery = $this->requete("DELETE FROM form_task WHERE Id_task = :Id_task AND user_id_num = :user_id_num",$data);
    return $sqlQuery;
  }
    
}