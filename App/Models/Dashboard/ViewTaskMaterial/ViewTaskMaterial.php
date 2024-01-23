<?php

namespace App\Models\Dashboard\ViewTaskMaterial;
  
  use App\Config_connect\database;
  
  include "getViewTaskMaterial.php";
  include "deleteViewTaskMaterial.php";
  
  class ViewTaskMaterial extends database{
  
      use getViewTaskMaterial;
      use deleteViewTaskMaterial;
    }