<?php

namespace App\Controller\Dashboard\FormTaskNameCustom;

trait setFormTaskNameCustom
{
  public function TaskRegistrationNameCustom($data){
    
    $NameCustom = htmlspecialchars(trim(strip_tags($data['NameCustom'])));
    $Mobile = htmlspecialchars(trim(strip_tags($data['Mobile'])));
    $addresse = htmlspecialchars(trim(strip_tags($data['addresse'])));
    $email = htmlspecialchars(trim(strip_tags($data['email'])));
      
    if ($NameCustom == "" || $Mobile == ""|| $addresse == ""|| $email == "") {
      echo " S'il vous plaît, remplissez tous les champs.";
    }else {
      if ($this->getListNameCustom($NameCustom) == false) {
        if ($this->getListNameCustomMobile($Mobile) == false) {
          if (filter_var($Mobile, FILTER_SANITIZE_NUMBER_INT))
          {
            $meta_carac = array("-", ".", " ");
            $Mobile = str_replace($meta_carac, "", $Mobile);
            if ($this->getTaskRegistrationNameCustom($NameCustom,$Mobile,$addresse,$email)== false) {
          $result = $this->setTaskRegistrationNameCustom($NameCustom,$Mobile,$addresse,$email);
      if ($result) {
        echo "Nouveau enregistrement créé avec succès";
        echo "<script>location.href='ViewTaskNameCustom';</script>";
    } else {
      echo "Erreur : " . $result . "<br>";
    }
        }else {
          echo " Ces informations sont déjà enreigistrer.";
        }
          }
          else{
            echo "$Mobile n'est pas un numéro valide";
          }
        }else {
          echo " Ce numéro appartient déjà a un autre client";
        }
      }else {
        echo " Ce nom client est déjà utilisé.";
      }
      
    }
  }
  
}