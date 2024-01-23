<?php

namespace App\Controller\signOut;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class Out
{
    function view(Request $request)
    {
        extract($request->attributes->all(), EXTR_SKIP);
        ob_start();
        include sprintf('../view/signOut/Out.php', $_route);
    
        return new Response(ob_get_clean());
    } 
}