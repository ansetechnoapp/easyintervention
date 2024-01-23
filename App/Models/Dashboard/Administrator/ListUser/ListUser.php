<?php

namespace App\Models\Dashboard\Administrator\ListUser;

  use App\Config_connect\database;

  include 'getListUser.php';
  include 'updateListUser.php';
  
  class ListUser extends database{
    use getListUser,updateListUser;
    }