<?php

namespace App\Models\passwordUpdate;

use App\Config_connect\database;

include "getpasswordUpdate.php";
include "updatePasswordUpdate.php";

class passwordUpdate extends database{

    use getpasswordUpdate;
    use updatePasswordUpdate;
  }