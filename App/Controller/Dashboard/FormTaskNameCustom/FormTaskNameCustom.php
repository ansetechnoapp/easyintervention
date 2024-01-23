<?php

namespace App\Controller\Dashboard\FormTaskNameCustom;

use App\Models\Dashboard\FormTaskNameCustom\FormTaskNameCustom as FormTaskNameCustomController;

include "getFormTaskNameCustom.php";
include "setFormTaskNameCustom.php";
include "routeFormTaskNameCustom.php";

class FormTaskNameCustom extends FormTaskNameCustomController{

    use getFormTaskNameCustom;
    use setFormTaskNameCustom;
    use routeFormTaskNameCustom;
  }
