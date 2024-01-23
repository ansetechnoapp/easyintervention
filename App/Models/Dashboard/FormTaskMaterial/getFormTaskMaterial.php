<?php

namespace App\Models\Dashboard\FormTaskMaterial;

trait getFormTaskMaterial
{
  
    public function ListNameCustom(){
        $sqlQuery = $this->requete("SELECT * FROM namecustomer ORDER BY id DESC"); 
        return $sqlQuery->fetchAll();
      }

      public function getMarqueModeleNameCustom($Marque,$Modele,$NameCustom)
  {
    $sqlQuery = $this->requete("SELECT * FROM material WHERE Marque='$Marque' AND Modele='$Modele' AND NameCustom='$NameCustom'");
    if ($sqlQuery) {
      return $sqlQuery->fetchAll();
    } else {
      return false;
    }
  }

  public function getTaskRegistrationEquipment($Equipment, $Marque, $Modele, $NameCustom, $Responsable)
  {
    $sqlQuery = $this->requete("SELECT * FROM material WHERE Equipment='$Equipment' AND
  Marque='$Marque' AND Modele='$Modele' AND NameCustom='$NameCustom' AND Responsable='$Responsable'");
    if ($sqlQuery) {
      return $sqlQuery->fetchAll();
    } else {
      return false;
    }
  }
}