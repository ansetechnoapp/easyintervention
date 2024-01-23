<?php

namespace App\Controller\Dashboard\EditTaskForm;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


trait routeEditTaskForm
{
  function view(Request $request)
  {
      extract($request->attributes->all(), EXTR_SKIP);
      ob_start();
      include sprintf('../view/Dashboard/EditTaskForm/EditTaskForm.php', $_route);
  
      return new Response(ob_get_clean());
  }
}