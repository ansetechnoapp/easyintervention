<?php

namespace App\Models\Dashboard\FormTaskNameCustom;

trait getFormTaskNameCustom
{
  
    public function getListNameCustom($NameCustom){
        $sqlQuery = $this->requete("SELECT * FROM namecustomer WHERE NameCustom='$NameCustom'");
        if ($sqlQuery) {
          return $sqlQuery->fetchAll();
        }else{
          return false;
        }
      }

      public function getListNameCustomMobile($Mobile){
        $sqlQuery = $this->requete("SELECT * FROM namecustomer WHERE Mobile='$Mobile'");
        if ($sqlQuery) {
          return $sqlQuery->fetchAll();
        }else{
          return false;
        }
      }
      public function getTaskRegistrationNameCustom($NameCustom,$Mobile,$addresse,$email){
        $sqlQuery = $this->requete("SELECT * FROM namecustomer WHERE NameCustom='$NameCustom' AND Mobile='$Mobile' AND addresse='$addresse'
        AND email='$email'");
        if ($sqlQuery) {
          return $sqlQuery->fetchAll();
        }else{
          return false;
        }
      }
}