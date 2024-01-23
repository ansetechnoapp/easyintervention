<?php

namespace App\Controller\Dashboard\Administrator\AddUser;



trait setAddUser
{
  
  public function addAdminUser($data){
    
    $pseudo = htmlspecialchars(trim(strip_tags($data['pseudo'])));
    $password = SHA1(htmlspecialchars(trim(strip_tags($data['password']))));
    $password2 = SHA1(htmlspecialchars(trim(strip_tags($data['confPassword']))));

    $checkPseudo = $this->checkExistPseudo($pseudo);
    if ( isset($pseudo)){
      if ($password == "" || $pseudo == "") {
        echo " S'il vous plaît, remplissez tous les champs.";
      }elseif(strlen($password) < 5) {
        echo " S'il vous plaît, votre mot de passe doit être supérieur à cinq caractères.";
      }elseif(!preg_match("#[0-9]+#",$password)) {      
        echo " Votre mot de passe doit contenir au moins 1 numéro !";
      }elseif(!preg_match("#[a-z]+#",$password)) {
        echo " Votre mot de passe doit contenir au moins 1 lettre!"; 
      }elseif ($checkPseudo == TRUE){
        echo " S'il vous plaît, cet identifiant ou pseudo existe déjà.";
      }else {
        if ($password == $password2) {
        $result =$this->setaddAdminUser($password,$pseudo);
        if ($result) {
          echo "Nouveau enregistrement créé avec succès";
        } else {
        echo "Erreur : " . $result . "<br>";
        }
        }else {
          echo "Les deux mots de passe ne sont pas identiques " ;
          }
      }
     }else {
      echo "Entrer un pseudo et verifier que tous les champs soit remplir " ;
     }
  }
}


  