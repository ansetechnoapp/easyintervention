<?php

namespace App\Controller\passwordUpdate;

use App\Models\passwordUpdate\passwordUpdate as passwordUpdateController;

include "updatePasswordUpdate.php";
include "routePasswordUpdate.php";

class passwordUpdate extends passwordUpdateController{

    use updatePasswordUpdate;
    use routePasswordUpdate;
  }
