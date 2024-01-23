<?php

namespace App\Models\Dashboard\Administrator\ViewTaskAdmin;
   
trait getViewTaskAdmin
{
  
    public function List_Task_admin(){
        $sqlQuery = $this->requete("SELECT * FROM form_task");
        return $sqlQuery->fetchAll();
      }
      
}


    
