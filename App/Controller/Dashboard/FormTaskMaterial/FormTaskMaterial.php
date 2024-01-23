<?php

namespace App\Controller\Dashboard\FormTaskMaterial;

use App\Models\Dashboard\FormTaskMaterial\FormTaskMaterial as FormTaskMaterialController;

include "getFormTaskMaterial.php";
include "setFormTaskMaterial.php";
include "routeFormTaskMaterial.php";

class FormTaskMaterial extends FormTaskMaterialController{

    use getFormTaskMaterial;
    use setFormTaskMaterial;
    use routeFormTaskMaterial;
  }
