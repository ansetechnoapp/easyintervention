<?php

namespace App\Controller\Dashboard\Administrator\ListUser;

use  App\Models\Dashboard\Administrator\ListUser\ListUser as ListUserController;

include 'routeListUser.php';
include 'updateListUser.php';

class ListUser extends ListUserController{
  use routeListUser,updateListUser;
  
  }
  


  