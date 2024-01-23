<?php

namespace App\Models\Dashboard\ViewTaskMaterial;

trait getViewTaskMaterial
{
    public function ListMaterial()
    {
      $sqlQuery = $this->requete("SELECT * FROM material ORDER BY id DESC");
      return $sqlQuery->fetchAll();
    }
    public function getListFormTaskForMaterial($NameCustom, $Equipment)
    {
      $sqlQuery = $this->requete("SELECT * FROM form_task WHERE NameCustomer='$NameCustom' AND Equipment ='$Equipment'");
      if ($sqlQuery) {
        return true;
      } else {
        return false;
      }
    }

    public function getListForDelete($NameCustom, $Equipment)
  {
    $sqlQuery = $this->requete("SELECT * FROM material WHERE NameCustom='$NameCustom' AND Equipment ='$Equipment'");
    if ($sqlQuery) {
      return true;
    } else {
      return false;
    }
  }
  
}