<?php

namespace App\Controller\Dashboard\ViewTaskMaterial;

trait deleteViewTaskMaterial
{
    public function btnSupTaskMaterial($data){
      
        $NameCustom = htmlspecialchars(trim(strip_tags($data['NameCustom'])));
        $Equipment = htmlspecialchars(trim(strip_tags($data['Equipment'])));
        
        
        if ($this-> getListFormTaskForMaterial($NameCustom,$Equipment) === true) {
          $result = $this-> deleteBtnSupFormTaskForMaterial($NameCustom,$Equipment);
        }
    
        if ($this-> getListForDelete($NameCustom,$Equipment) === true) {
          $result = $this-> deleteListForDelete($NameCustom,$Equipment);
        }
        
        if ($result) {
          echo "<script>location.href='ViewTaskMaterial';</script>";
      } else {
      echo "Erreur : " . $result . "<br>";
      }
      }
  
}