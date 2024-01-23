<?php

namespace App\Controller\passwordForgot;

use App\Models\passwordForgot\passwordForgot as passwordForgotController;

include "setpasswordForgot.php";
include "routePasswordForgot.php";

class passwordForgot extends passwordForgotController{

    use setpasswordForgot;
    use routePasswordForgot;
  }
