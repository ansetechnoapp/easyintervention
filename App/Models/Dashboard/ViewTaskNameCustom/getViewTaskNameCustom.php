<?php

namespace App\Models\Dashboard\ViewTaskNameCustom;

trait getViewTaskNameCustom
{
  
    public function ListNameCustom(){
        $sqlQuery = $this->requete("SELECT * FROM namecustomer ORDER BY id DESC"); 
        return $sqlQuery->fetchAll();
      }
      public function getListFormTaskForNameCustom($NameCustom){
        $sqlQuery = $this->requete("SELECT * FROM form_task WHERE NameCustomer='$NameCustom'");
        if ($sqlQuery) {
          return true;
        }else{
          return false;
        }
      }
      public function getListMaterialForNameCustom($NameCustom){
        $sqlQuery = $this->requete("SELECT * FROM material WHERE NameCustom='$NameCustom'");
        if ($sqlQuery) {
          return true;
        }else{
          return false;
        }
      }

      public function getListForDelete($NameCustom){
        $sqlQuery = $this->requete("SELECT * FROM namecustomer WHERE NameCustom='$NameCustom'");
        if ($sqlQuery) {
          return true;
        }else{
          return false;
        }
      }
}