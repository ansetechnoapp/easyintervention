<?php

namespace App\Models\Dashboard\EditTaskForm;

trait getEditTaskForm
{
    public function ListNameCustom(){
        $sqlQuery = $this->requete("SELECT * FROM namecustomer ORDER BY id DESC"); 
        return $sqlQuery->fetchAll();
      }

      public function ListMaterial()
  {
    $sqlQuery = $this->requete("SELECT * FROM material ORDER BY id DESC");
    return $sqlQuery->fetchAll();
  }
  
}