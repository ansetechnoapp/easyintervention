<?php

namespace App\Controller\Dashboard\ViewTask;

use App\Models\Dashboard\ViewTask\ViewTask as ViewTaskController;

include "getViewTask.php";
include "deleteViewTask.php";
include "routeViewTask.php";

class ViewTask extends ViewTaskController{

    use getViewTask,deleteViewTask,routeViewTask;
 
  }
