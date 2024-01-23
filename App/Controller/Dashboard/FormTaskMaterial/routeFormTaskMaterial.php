<?php

namespace App\Controller\Dashboard\FormTaskMaterial;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


trait routeFormTaskMaterial
{
  function view(Request $request)
  {
      extract($request->attributes->all(), EXTR_SKIP);
      ob_start();
      include sprintf('../view/Dashboard/FormTaskMaterial/FormTaskMaterial.php', $_route);
  
      return new Response(ob_get_clean());
  }
}