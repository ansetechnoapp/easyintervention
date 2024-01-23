<?php

namespace App\Controller\Dashboard\EditTaskForm;

use App\Models\Dashboard\EditTaskForm\EditTaskForm as EditTaskFormController;

include "getEditTaskForm.php";
include "updateEditTaskForm.php";
include "routeEditTaskForm.php";

class EditTaskForm extends EditTaskFormController{

    use getEditTaskForm;
    use updateEditTaskForm;
    use routeEditTaskForm;
  }
