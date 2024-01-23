<?php

namespace App\Models\Dashboard\TaskForm;
  
  use App\Config_connect\database;
  
  include "getTaskForm.php";
  include "setTaskForm.php";
  
  class TaskForm extends database{
  
      use getTaskForm;
      use setTaskForm;
    } 