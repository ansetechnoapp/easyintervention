<?php

namespace App\Controller\Dashboard\UserUpdateAccount;

use App\Models\Dashboard\UserUpdateAccount\UserUpdateAccount as UserUpdateAccountController;

include "getUserUpdateAccount.php";
include "updateUserUpdateAccount.php";
include "routeUserUpdateAccount.php";

class UserUpdateAccount extends UserUpdateAccountController{

    use getUserUpdateAccount;
    use updateUserUpdateAccount;
    use routeUserUpdateAccount;
  }
