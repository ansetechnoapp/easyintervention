<?php require "../includes/head.php";?>
<?php

use includes\session;
use Symfony\Component\{
         Routing,
         HttpFoundation\Request,
         HttpFoundation\Response,
         HttpKernel
};

require "../vendor/autoload.php"; 
session::init();


// if (isset($Sign_out) && $Sign_out == 'sign_out') {session::destroy();}
// htmlspecialchars($Sign_out, ENT_QUOTES) == 'out';
// if (isset($_GET['action']) && $_GET['action'] == 'logout') {session::destroy();};
$routes = include '../src/router/routes.php';
$request = Request::createFromGlobals();

$context = new Routing\RequestContext();
$context->fromRequest($request);
$matcher = new Routing\Matcher\UrlMatcher($routes, $context);

$controllerResolver = new HttpKernel\Controller\ControllerResolver();
$argumentResolver = new HttpKernel\Controller\ArgumentResolver();

try {

    $request->attributes->add($matcher->match($request->getPathInfo()));

    $controller = $controllerResolver->getController($request);
    $arguments = $argumentResolver->getArguments($request, $controller);

    $response = call_user_func_array($controller, $arguments);

} catch (Routing\Exception\ResourceNotFoundException $exception) {
    $response = new Response('Not Found', 404);
} catch (Exception $exception) {
    $response = new Response('An error occurred', 500);
}

$response->send();
?>
<?php require "../includes/footEnd.php";?>