<?php

namespace App\Controller\FormSignIn;

use App\Models\FormSignIn\FormSignIn as FormSignInController;

include "getFormSignIn.php";
include "routeFormSignIn.php";

class FormSignIn extends FormSignInController{

    use getFormSignIn; 
    use routeFormSignIn;
  }
