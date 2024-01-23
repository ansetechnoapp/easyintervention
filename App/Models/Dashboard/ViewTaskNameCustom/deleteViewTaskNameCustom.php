<?php

namespace App\Models\Dashboard\ViewTaskNameCustom;

trait deleteViewTaskNameCustom
{
  
  public function deleteBtnSupFormTaskForNameCustom($NameCustom){
    $data = [
      'NameCustom' => $NameCustom,
  ];  
    $sqlQuery = $this->requete("DELETE FROM form_task WHERE NameCustomer = :NameCustom",$data);
    return $sqlQuery;
  }
  public function deleteBtnSupMaterialForNameCustom($NameCustom){
    $data = [
    'NameCustom' => $NameCustom,
];
    $sqlQuery = $this->requete("DELETE FROM material WHERE NameCustom = :NameCustom",$data);
    return $sqlQuery;
}
public function deleteBtnSupTaskNameCustom($NameCustom){
  $data = [
  'NameCustom' => $NameCustom,
];
  $sqlQuery = $this->requete("DELETE FROM namecustomer WHERE NameCustom = :NameCustom",$data);
  return $sqlQuery;
}
}