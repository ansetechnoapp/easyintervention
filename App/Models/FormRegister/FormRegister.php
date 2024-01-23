<?php

  namespace App\Models\FormRegister;
  
  use App\Config_connect\database;
  
  include "getFormRegister.php";
  include "setFormRegister.php";
  
  class FormRegister extends database{
  
      use getFormRegister;
      use setFormRegister;
    }