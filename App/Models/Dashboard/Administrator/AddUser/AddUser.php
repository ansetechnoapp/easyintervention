<?php

  namespace App\Models\Dashboard\Administrator\AddUser;
  
  use App\Config_connect\database;
  
  include 'getAddUser.php';
  include 'setAddUser.php';
  
  class AddUser extends database{
  
    use getAddUser,setAddUser;
  
    }