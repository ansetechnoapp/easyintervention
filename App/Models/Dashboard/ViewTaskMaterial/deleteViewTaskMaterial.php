<?php

namespace App\Models\Dashboard\ViewTaskMaterial;

trait deleteViewTaskMaterial
{
  public function deleteBtnSupFormTaskForMaterial($NameCustom,$Equipment){
    $data = [
      'NameCustom' => $NameCustom,
      'Equipment' => $Equipment,
  ];  
    $sqlQuery = $this->requete("DELETE FROM form_task WHERE NameCustomer = :NameCustom AND Equipment = :Equipment",$data);
    return $sqlQuery;
  }

  public function deleteListForDelete($NameCustom,$Equipment){
    $data = [
    'NameCustom' => $NameCustom,
    'Equipment' => $Equipment,
];
    $sqlQuery = $this->requete("DELETE FROM material WHERE NameCustom = :NameCustom AND Equipment = :Equipment",$data);
    return $sqlQuery;
}
}