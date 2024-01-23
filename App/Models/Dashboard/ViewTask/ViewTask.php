<?php

namespace App\Models\Dashboard\ViewTask;
  
  use App\Config_connect\database;
  
  include "getViewTask.php";
  include "DELETEViewTask.php";
  
  class ViewTask extends database{
  
      use getViewTask;
      use DELETEViewTask;
    }