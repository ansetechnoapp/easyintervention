<?php

namespace App\Models\Dashboard\FormTaskMaterial;
  
  use App\Config_connect\database;
  
  include "getFormTaskMaterial.php";
  include "setFormTaskMaterial.php";
  
  class FormTaskMaterial extends database{
  
      use getFormTaskMaterial;
      use setFormTaskMaterial;
    }