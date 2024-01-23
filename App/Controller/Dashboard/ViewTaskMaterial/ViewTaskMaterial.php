<?php

namespace App\Controller\Dashboard\ViewTaskMaterial;

use App\Models\Dashboard\ViewTaskMaterial\ViewTaskMaterial as ViewTaskMaterialController;

include "getViewTaskMaterial.php";
include "deleteViewTaskMaterial.php";
include "routeViewTaskMaterial.php";

class ViewTaskMaterial extends ViewTaskMaterialController{

    use getViewTaskMaterial;
    use deleteViewTaskMaterial;
    use routeViewTaskMaterial;
  }
