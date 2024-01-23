<?php

namespace App\Controller\Dashboard\ViewTaskNameCustom;

trait deleteViewTaskNameCustom
{
  
  public function btnSupTaskNameCustom($data){
    
    $NameCustom = htmlspecialchars(trim(strip_tags($data['NameCustom'])));
    
    
   
    
    if ($this-> getListFormTaskForNameCustom($NameCustom) === true) {
      $result = $this-> deleteBtnSupFormTaskForNameCustom($NameCustom);
    }

    if ($this-> getListMaterialForNameCustom($NameCustom) === true) {
      $result = $this-> deleteBtnSupMaterialForNameCustom($NameCustom);
    }

    if ($this-> getListForDelete($NameCustom) === true) {
      $result = $this-> deleteBtnSupTaskNameCustom($NameCustom);
    }
    
    if ($result) {
      echo "<script>location.href='ViewTaskNameCustom';</script>";
  } else {
  echo "Erreur : " . $result . "<br>";
  }
  }
}