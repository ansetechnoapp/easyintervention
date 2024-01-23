<?php

namespace App\Controller\FormSignIn;

use includes\session;


trait getFormSignIn
{
    public function UserSign_in($data)
    {
      
      $emailPseudo = htmlspecialchars(trim(strip_tags($data['emailPseudo'])));
      $password = htmlspecialchars(trim(strip_tags($data['password']))); 
      $checkEmailPseudo = $this->getCheckExistEmailPseudo($emailPseudo);
      $checkStatus = $this->getCheckStatus($emailPseudo);
      if (isset($emailPseudo)) {
        if ($emailPseudo == "" || $password == "") { 
          echo " S'il vous plaît, remplissez tous les champs.";
        } elseif ($checkEmailPseudo == FALSE) {
          echo " Votre adresse email ou pseudo n'est pas correct";
        } elseif (strlen($password) < 5) { 
          echo " S'il vous plaît, votre mot de passe n'a pas le nombre de caractères qu'il faut.";
        } elseif (!preg_match("#[0-9]+#", $password)) {
          echo " S'il vous plaît, votre mot de passe n'est pas correct.";
        } elseif (!preg_match("#[a-z]+#", $password)) {
          echo " S'il vous plaît, votre mot de passe n'est pas correct.";
        }elseif ($checkStatus == false) {
          echo " Votre compte a été suspendu";
        } else {
      //     echo"rr";
      // die();
          if (filter_var($emailPseudo, FILTER_VALIDATE_EMAIL)) {
            /* 
               On recuper les informations de l'utilisateur dans la bases de donnée
               grace a l'email et le mot de passe entrée par l'
               utilisateur pour pouvoir lui crée une session 
               */
            $logResult = $this->UserLoginAutho($emailPseudo, $password);
            /* 
               On recuper les informations de l'utilisateur dans la bases de donnée
               grace a l'email et le mot de passe entrée par l'
               utilisateur pour pouvoir lui crée une session 
               */
            if ($logResult) {
              Session::init();
              Session::set('login', TRUE);
              Session::set('user_id', $logResult->user_id);
              Session::set('pseudo', $logResult->pseudo);
              Session::set('firstName', $logResult->firstName);
              Session::set('lastName', $logResult->lastName);
              Session::set('email', $logResult->email);
              Session::set('mobile', $logResult->mobile);
              Session::set('addresse', $logResult->addresse);
              Session::set('Birthday', $logResult->Birthday);
              Session::set('City', $logResult->City);
              Session::set('Company_Name', $logResult->Company_Name);
              Session::set('roleid', $logResult->roleid);
              Session::set('status', $logResult->status);
              Session::set('logMsg', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success !</strong> You are Logged In Successfully !</div>');
              echo "<script>location.href='ViewTask';</script>";
            } else {
              echo "mot de passe ou email incorrect";
            }
          } else {
            // echo"aa";
            // die();
            /* 
               On recuper les informations de l'utilisateur dans la bases de donnée
               grace a l'email et le mot de passe entrée par l'
               utilisateur pour pouvoir lui crée une session 
               */
            $logResult = $this->UserLoginAutho($emailPseudo, $password);
            /* 
               On recuper les informations de l'utilisateur dans la bases de donnée
               grace a l'email et le mot de passe entrée par l'
               utilisateur pour pouvoir lui crée une session 
               */
            if ($logResult) {
  
              Session::init();
              Session::set('login', TRUE);
              Session::set('user_id', $logResult->user_id);
              Session::set('roleid', $logResult->roleid);
              Session::set('firstName', $logResult->firstName);
              Session::set('email', $logResult->email);
              Session::set('lastName', $logResult->lastName);
              Session::set('logMsg', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success !</strong> You are Logged In Successfully !</div>');
  
            echo "<script>location.href='ViewTask';</script>";
            } else {
              echo "mot de passe ou email incorrect";
            }
          }
        }
      } else {
        echo "Entrer un Email correcte et verifier que tous les champs soit remplir ";
      }
    }
  
}