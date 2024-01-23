<?php

namespace App\Controller\Dashboard\TaskForm;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


trait routeTaskForm
{
  function view(Request $request)
  {
      extract($request->attributes->all(), EXTR_SKIP);
      ob_start();
      include sprintf('../view/Dashboard/TaskForm/TaskForm.php', $_route);
  
      return new Response(ob_get_clean());
  }
}