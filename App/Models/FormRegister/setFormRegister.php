<?php

namespace App\Models\FormRegister;

trait setFormRegister
{
   public function UserRegistration($data){
    $firstName = $data['firstName'];
    $pseudo = $data['pseudo'];
    $lastName = $data['lastName'];
    $email = $data['email'];
    $password = SHA1($data['password']);
    $password2 = SHA1($data['confPassword']);

    $checkEmail = $this->checkExistEmail($email);
    $checkPseudo = $this->checkExistPseudo($pseudo);

    if ( isset($data['email']) || isset($data['pseudo'])){

      if ( $firstName == "" || $lastName == "" || $email == "" || $password == "" || $pseudo == "") {

        echo " S'il vous plaît, remplissez tous les champs.";

      }elseif (strlen($lastName) < 1) {

        echo " S'il vous plaît, votre nom doit être supérieur à trois caractères.";

      }elseif(strlen($password) < 5) {
       
        echo " S'il vous plaît, votre mot de passe doit être supérieur à cinq caractères.";

      }elseif(!preg_match("#[0-9]+#",$password)) {
       
        echo " Votre mot de passe doit contenir au moins 1 numéro !";

      }elseif(!preg_match("#[a-z]+#",$password)) {

        echo " Votre mot de passe doit contenir au moins 1 lettre!";
        
      }elseif ($checkPseudo == TRUE){

        echo " S'il vous plaît, cet identifiant ou pseudo existe déjà.";

      }elseif ($checkEmail == TRUE){

        echo " Vous avez déjà créé un compte sur la plateforme.";
      }else {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        if ($password == $password2) {
      
          $sqlQuery = "INSERT INTO user_info ( firstName, lastName, email, motdepasse, pseudo) 
                     VALUES ('$firstName','$lastName','$email','$password','$pseudo')";
        $result = mysqli_query($this->dbConnect, $sqlQuery);
        if ($result) {
          echo "Nouveau enregistrement créé avec succès";
      } else {
      echo "Erreur : " . $sqlQuery . "<br>" . mysqli_error($this->dbConnect);
      }
        }else {
          echo "Les deux mots de passe ne sont pas identiques " ;
          }
        }
      }

    mysqli_close($this->dbConnect);
     }else {

      echo "Entrer un Email correcte et verifier que tous les champs soit remplir " ;

     }

    
  } 
  
}