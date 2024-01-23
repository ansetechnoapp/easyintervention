<?php

namespace App\Controller\Dashboard\UserUpdateAccount;


trait updateUserUpdateAccount
{
  
  public function UpdateUserRegistration($data)
  { 
    $user_id = htmlspecialchars(trim(strip_tags($data['user_id'])));
    $firstName = htmlspecialchars(trim(strip_tags($data['firstName'])));
    $lastName = htmlspecialchars(trim(strip_tags($data['lastName'])));
    $email = htmlspecialchars(trim(strip_tags($data['email'])));
    $Birthday = htmlspecialchars(trim(strip_tags($data['Birthday'])));
    $mobile = htmlspecialchars(trim(strip_tags($data['mobile'])));
    $City = htmlspecialchars(trim(strip_tags($data['City'])));
    $Country = htmlspecialchars(trim(strip_tags($data['Country'])));
    $addresse = htmlspecialchars(trim(strip_tags($data['addresse'])));
    $Company_Name = htmlspecialchars(trim(strip_tags($data['Company_Name'])));
    $password = SHA1(htmlspecialchars(trim(strip_tags($data['password']))));
    $password2 = SHA1(htmlspecialchars(trim(strip_tags($data['confPassword']))));


    $checkNum = $this->checkExistNum($mobile); 
    $checkVerifyNum = $this->checkVerifyNumUser($mobile, $user_id);
    $checkEmail = $this->checkExistEmail($email);
    $checkVerifyEmail = $this->checkVerifyEmailUser($email, $user_id);

    if (
      $firstName == "" || $lastName == ""  || $password == "" || $password2 == ""
    ) {

      echo " S'il vous plaît, remplissez les champs nom,prenom,numéro et mot de passe.";
    } elseif (strlen($firstName) < 1) {

      echo " S'il vous plaît, votre nom complet doit être plus de 9 caractères.";
    } elseif (strlen($lastName) < 1) {

      echo " S'il vous plaît, l'appellation du client doit contenir au moins 2 caractères.";
    } elseif (preg_match(" #^[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}?$# ", $mobile)) {

      echo " S'il vous plaît, entrer un numéro valide.";
    } elseif (strlen($City) < 2 && strlen($Country) < 2 && strlen($Company_Name) < 2 && strlen($password) < 2) {

      echo " S'il vous plaît, les champs Sujet d'intervention, Détail ou description, Observation (s) et Recommandation (s), Résultats ou Verdicts doivent être
          Supérieur à 2 caractères.";
    } else {
      if ($password == $password2) {


        if (isset($firstName)) {
          $data = [
      'firstName' => $firstName,
      'motdepasse' => $password,
      'user_id' => $user_id,
  ];
          $this->requete("UPDATE user_info SET firstName = :firstName WHERE user_id =:user_id AND motdepasse =:motdepasse",$data);
        } 

        if (isset($lastName)) {
          $data = [
            'lastName' => $lastName,
            'motdepasse' => $password,
            'user_id' => $user_id,
        ];
         $this->requete("UPDATE user_info SET lastName = :lastName WHERE user_id =:user_id AND motdepasse =:motdepasse",$data);
        } 

        if (isset($email) && $checkEmail == true) {

          if ($checkVerifyEmail == true) {
            $data = [
              'motdepasse' => $password,
              'email' => $email,
              'user_id' => $user_id,
          ];

            $this->requete("UPDATE user_info SET email = :email WHERE user_id =:user_id AND motdepasse =:motdepasse",$data);
          }
        }else {
          if (isset($email)) {
            $data = [
              'motdepasse' => $password,
              'email' => $email,
              'user_id' => $user_id,
          ];

            $this->requete("UPDATE user_info SET email = :email WHERE user_id =:user_id AND motdepasse =:motdepasse",$data);
          }
        }

        if (isset($Birthday)) {
          $data = [
            'motdepasse' => $password,
            'Birthday' => $Birthday,
            'user_id' => $user_id,
        ];
          $this->requete("UPDATE user_info SET Birthday = :Birthday WHERE user_id =:user_id AND motdepasse =:motdepasse",$data);
        } 
        if (isset($mobile) && $checkNum == true) {
          if ($checkVerifyNum == true) {
            $data = [
              'motdepasse' => $password,
              'mobile' => $mobile,
              'user_id' => $user_id,
            ];
            $this->requete("UPDATE user_info SET mobile = :mobile WHERE user_id =:user_id AND motdepasse =:motdepasse",$data);
          }
        } else {
          if (isset($mobile)) {

            $data = [
              'motdepasse' => $password,
              'mobile' => $mobile,
              'user_id' => $user_id,
            ];

            $this->requete("UPDATE user_info SET mobile = :mobile WHERE user_id =:user_id AND motdepasse =:motdepasse",$data);
          }
        }

        if (isset($City)) {
          $data = [
            'motdepasse' => $password,
            'City' => $City,
            'user_id' => $user_id,
          ];
          $this->requete("UPDATE user_info SET City = :City WHERE user_id =:user_id AND motdepasse =:motdepasse",$data);
        } 

        if (isset($Country)) {
          $data = [
            'motdepasse' => $password,
            'Country' => $Country,
            'user_id' => $user_id,
          ];
          $this->requete("UPDATE user_info SET Country = :Country WHERE user_id =:user_id AND motdepasse =:motdepasse",$data);
        } 

        if (isset($Company_Name)) {
          $data = [
            'motdepasse' => $password,
            'Company_Name' => $Company_Name,
            'user_id' => $user_id,
          ];
          $this->requete("UPDATE user_info SET Company_Name = :Company_Name WHERE user_id =:user_id AND motdepasse =:motdepasse",$data);
        } 

        if (isset($addresse)) {
          $data = [
            'motdepasse' => $password,
            'addresse' => $addresse,
            'user_id' => $user_id,
          ];
         $this->requete("UPDATE user_info SET addresse = :addresse WHERE user_id =:user_id AND motdepasse =:motdepasse",$data);
        } 

        if ($checkNum == true && $checkEmail == true) {

          if ($checkVerifyNum == false) {
            echo "Ce numéro a déjà été utilisé. ";
          }elseif ($checkVerifyEmail == false) {
            echo "Cet email a déjà été utilisé. ";
          }else {
            echo "information mise a jour avec succès";
          }} else {
          echo "information mise a jour avec succès";
        }
      
      } else {
        echo "Veuillez bien taper vos mots de passe.";
      }
    }
  }
    
}