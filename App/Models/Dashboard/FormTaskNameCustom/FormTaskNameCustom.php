<?php

namespace App\Models\Dashboard\FormTaskNameCustom;
  
  use App\Config_connect\database;
  
  include "getFormTaskNameCustom.php";
  include "setFormTaskNameCustom.php";
  
  class FormTaskNameCustom extends database{
  
      use getFormTaskNameCustom;
      use setFormTaskNameCustom;
    }