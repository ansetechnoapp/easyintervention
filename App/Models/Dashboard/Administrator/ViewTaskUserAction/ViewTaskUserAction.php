<?php

namespace App\Models\Dashboard\Administrator\ViewTaskUserAction;

  use App\Config_connect\database;

  include 'getViewTaskUserAction.php';
  include 'updateViewTaskUserAction.php';
  
  class ViewTaskUserAction extends database{
    use getViewTaskUserAction,updateViewTaskUserAction;
    }