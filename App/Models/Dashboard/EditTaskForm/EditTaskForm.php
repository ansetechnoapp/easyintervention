<?php

namespace App\Models\Dashboard\EditTaskForm;
 
  
  use App\Config_connect\database;
  
  include "getEditTaskForm.php";
  include "updateEditTaskForm.php";
  
  class EditTaskForm extends database{
  
      use getEditTaskForm;
      use updateEditTaskForm;
    } 