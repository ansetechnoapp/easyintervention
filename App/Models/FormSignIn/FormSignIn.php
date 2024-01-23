<?php

  namespace App\Models\FormSignIn;
  
  use App\Config_connect\database;
  
  include "getFormSignIn.php";
  
  class FormSignIn extends database{
  
      use getFormSignIn; 
    }