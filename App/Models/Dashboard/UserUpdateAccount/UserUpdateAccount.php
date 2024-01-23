<?php

namespace App\Models\Dashboard\UserUpdateAccount;
  
  use App\Config_connect\database;
  
  include "getUserUpdateAccount.php";
  
  class UserUpdateAccount extends database{
  
      use getUserUpdateAccount;
    }