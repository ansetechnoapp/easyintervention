<?php

namespace App\Models\Dashboard\ViewTaskNameCustom;
  
  use App\Config_connect\database;
  
  include "getViewTaskNameCustom.php";
  include "deleteViewTaskNameCustom.php";
  
  class ViewTaskNameCustom extends database{
  
      use getViewTaskNameCustom;
      use deleteViewTaskNameCustom;
    }