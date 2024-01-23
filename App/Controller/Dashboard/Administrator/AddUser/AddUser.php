<?php

namespace App\Controller\Dashboard\Administrator\AddUser;

use  App\Models\Dashboard\Administrator\AddUser\AddUser as AddUserController;

include 'routeAddUser.php';
include 'setAddUser.php';

class AddUser extends AddUserController{

  use routeAddUser,setAddUser;
  }
