<?php

namespace App\Controller\Dashboard\FormTaskMaterial;

trait setFormTaskMaterial
{
  
    public function TaskRegistrationEquipment($data){
        $Equipment = htmlspecialchars(trim(strip_tags($data['Equipment'])));
        $Marque = htmlspecialchars(trim(strip_tags($data['Marque'])));
        $Modele = htmlspecialchars(trim(strip_tags($data['Modele'])));
        $Responsable = htmlspecialchars(trim(strip_tags($data['Responsable'])));
        $NameCustom  = htmlspecialchars(trim(strip_tags($data['NameCustom'])));
        if ($Equipment == "" || $Marque == "" || $Modele == "" || $Responsable == "") {
          echo " S'il vous plaît, remplissez tous les champs.";
        }elseif (strlen($Equipment) < 1) {
          echo " S'il vous plaît, l'appellation du client doit contenir au moins 2 caractères.";
        }else {
          if ($this->getMarqueModeleNameCustom($Marque,$Modele,$NameCustom)== false){
      
            if ($this->getTaskRegistrationEquipment($Equipment,$Marque,$Modele,$NameCustom,$Responsable)== false) {
              $result = $this->setTaskRegistrationEquipment($Equipment,$Marque,$Modele,$NameCustom,$Responsable);
          if ($result) {
            echo "Nouveau enregistrement créé avec succès";
            echo "<script>location.href='ViewTaskMaterial';</script>";
        } else {
          echo "Erreur : " . $result . "<br>";
        }
            }else {
              echo " Ce equipement est déjà enreigistrer.";
            }
      
          }else {
            echo " Ce matériel est déjà enreigistrer.";
          }
          
        }
      }
}