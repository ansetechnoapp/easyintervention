<?php

 namespace includes;

use App\Config_connect\database;

class session extends database{  
  /* 
  verifie que la version du php est supérieur a la version 7
  et si oui demarre une section(a savoir que la fonction init que j'ai crée
  doit être appeler avant d'utiliser../../../ les autres fonctions de la classe session
  'on fait toujous session_start avant d'utiliser 
  $_SESSION;session_destroy();session_unset();etc.').
  */
  public static function init(){
    if (version_compare(phpversion(), '7.0.0', '<')) {
      if (session_id() == '') {
        session_start();
      }
    }else{
      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
    }
  }
  /* 
  verifie que la version du php est supérieur a la version 7
  et si oui demarre une section(a savoir que la fonction init que j'ai crée
  doit être appeler avant d'utiliser les autres fonctions de la classe session
  'on fait toujours session_start avant d'utiliser 
  $_SESSION;session_destroy();session_unset();etc.').
  */


  /* 
  cette fonction prend deux paramétre 
  et de gérer les variable($val dans ce cas ci) 
  du tableau superglobal $_SESSION
  */
  public static function set($key, $val){
    $_SESSION[$key] = $val;
  }
  /* 
  cette fonction prend deux paramétre 
  et de gérer les variable($val dans ce cas ci) 
  du tableau superglobal $_SESSION
  */



  // Cette fonction aide a connaitre la session en cour
  public static function get($key){
    if (isset($_SESSION[$key])) {
      return $_SESSION[$key];
    }else{
      return false;
    }
  }
  // Cette fonction aide a connaitre la session en cour

    // User logout Method(pour la déconnexion)
  public static function destroy(){
    session_destroy();
    session_unset();
    echo "<script>location.href='sign-in';</script>";
  }


   /* 
   CheckSession est une fonction pour protéger les pages d'une session utilisateur
   qui ne sont disponible ou consultable qu'apres la connexion de l'utilisateur.
   Donc connaittre le lien ne suffira pas a accéder a la page tant que Checsession
   est utilisé.
   */
  public static function CheckSession(){
    if (self::get('login') == FALSE) {
      echo "<script>location.href='sign-in';</script>";
    }
  }
     /* 
   CheckSession est une fonction pour protéger les pages d'une session utilisateur
   qui ne sont disponible ou consultable qu'apres la connexion de l'utilisateur.
   Donc connaittre le lien ne suffira pas a accéder a la page tant que Checsession
   est utilisé.
   */

   /* 
   CheckLogin est qui empêche d'ouvrir une nouvelle fois le formulaire de connexion
   pour taper des identifiants de connexion alors que tu as une section ou une connexion
   deja ouvert. 
   */
  public static function CheckLogin(){
    if (self::get("login") == TRUE) {
      echo "<script>location.href='ViewTask';</script>";
    }
  }
  public static function CheckLoginAdmin(){
    if (self::get("login") == TRUE && self::get('roleid') != 'admin') {
      echo "<script>location.href='ViewTask';</script>";
    }
  }
   /* 
   CheckLogin est qui empêche d'ouvrir une nouvelle fois le formulaire de connexion
   pour taper des identifiants de connexion alors que tu as une section ou une connexion
   deja ouvert. 
   */

}


