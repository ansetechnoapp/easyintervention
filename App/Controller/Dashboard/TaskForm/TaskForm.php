<?php

namespace App\Controller\Dashboard\TaskForm;

use App\Models\Dashboard\TaskForm\TaskForm as TaskFormController;

include "getTaskForm.php";
include "setTaskForm.php";
include "routeTaskForm.php";

class TaskForm extends TaskFormController{

    use getTaskForm;
    use setTaskForm;
    use routeTaskForm;
  }
