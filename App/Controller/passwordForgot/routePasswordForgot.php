<?php

namespace App\Controller\passwordForgot;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


trait routePasswordForgot
{
  function view(Request $request)
  {
      extract($request->attributes->all(), EXTR_SKIP);
      ob_start();
      include sprintf('../view/passwordForgot/passwordForgot.php', $_route);
  
      return new Response(ob_get_clean());
  }
}