<?php

namespace App\Controller\passwordUpdate;

trait updatePasswordUpdate
{
    public function passwordUpdate($data){
      
        $password = SHA1(htmlspecialchars(trim(strip_tags($data['password']))));
        $password2 = SHA1(htmlspecialchars(trim(strip_tags($data['confPassword']))));
        $email = htmlspecialchars(trim(strip_tags($data['email'])));
          if ($password == "" || $password2 == "") {
    
            echo " S'il vous plaît, remplissez tous les champs.";
    
          }elseif (strlen($password) < 3) {
    
            echo " S'il vous plaît, les champs Sujet d'intervention, Détail ou description, Observation (s) et Recommandation (s), Résultats ou Verdicts doivent être
            Supérieur à 5 caractères.";
    
          }else {
    
            if ($password == $password2) {
    
            
              $setPasswordUpdate = $this->setPasswordUpdate($email,$password);
              if ($setPasswordUpdate) {
                echo "Mise a jour mot de passe réussir";
                echo "<script>location.href='sign-in';</script>";
            }
          }
        }
        }
  
}