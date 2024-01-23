<?php

namespace App\Models\Dashboard\FormTaskMaterial;

use includes\session;

trait setFormTaskMaterial
{
  
  public function setTaskRegistrationEquipment($Equipment,$Marque,$Modele,$NameCustom,$Responsable){
    $user_id_num = session::get('user_id');
    
    $sqlQuery = $this->requete("INSERT INTO material (Equipment,Marque,Modele,NameCustom,Responsable,user_id_num) 
    VALUES ('$Equipment','$Marque','$Modele','$NameCustom','$Responsable','$user_id_num')");
    return $sqlQuery;
  }
}