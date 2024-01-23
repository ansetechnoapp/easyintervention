<?php

namespace App\Models\Dashboard\ViewTask;

use includes\session;

trait getViewTask
{
  
    public function List_Task()
    {   $user_id_num = session::get('user_id');
      $sqlQuery = $this->requete("SELECT * FROM form_task WHERE user_id_num ='$user_id_num' ORDER BY Id_task  DESC");
        return $sqlQuery->fetchAll();
    }
    
}