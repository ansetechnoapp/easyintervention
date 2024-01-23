<?php

namespace App\Controller\Dashboard\FormTaskNameCustom;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


trait routeFormTaskNameCustom
{
  function view(Request $request)
  {
      extract($request->attributes->all(), EXTR_SKIP);
      ob_start();
      include sprintf('../view/Dashboard/FormTaskNameCustom/FormTaskNameCustom.php', $_route);
  
      return new Response(ob_get_clean());
  }
}