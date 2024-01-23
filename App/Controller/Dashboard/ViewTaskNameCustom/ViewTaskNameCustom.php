<?php

namespace App\Controller\Dashboard\ViewTaskNameCustom;

use App\Models\Dashboard\ViewTaskNameCustom\ViewTaskNameCustom as ViewTaskNameCustomController;

include "getViewTaskNameCustom.php";
include "deleteViewTaskNameCustom.php";
include "routeViewTaskNameCustom.php";


class ViewTaskNameCustom extends ViewTaskNameCustomController{

    use getViewTaskNameCustom;
    use deleteViewTaskNameCustom;
    use routeViewTaskNameCustom;
    
  }
