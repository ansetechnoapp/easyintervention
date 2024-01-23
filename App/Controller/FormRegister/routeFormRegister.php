<?php

namespace App\Controller\FormRegister;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


trait routeFormRegister
{
  function view(Request $request)
  {
      extract($request->attributes->all(), EXTR_SKIP);
      ob_start();
      include sprintf('../view/FormRegister/FormRegister.php', $_route);
  
      return new Response(ob_get_clean());
  }
}