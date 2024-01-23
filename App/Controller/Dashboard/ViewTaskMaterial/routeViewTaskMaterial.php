<?php

namespace App\Controller\Dashboard\ViewTaskMaterial;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


trait routeViewTaskMaterial
{
  function view(Request $request)
  {
      extract($request->attributes->all(), EXTR_SKIP);
      ob_start();
      include sprintf('../view/Dashboard/ViewTaskMaterial/ViewTaskMaterial.php', $_route);
  
      return new Response(ob_get_clean());
  }
}