<?php

namespace App\Models\Dashboard\TaskForm;

trait getTaskForm
{
    public function ListNameCustom(){
        $sqlQuery = $this->requete("SELECT * FROM namecustomer ORDER BY id DESC"); 
        return $sqlQuery->fetchAll();
      }
  
}