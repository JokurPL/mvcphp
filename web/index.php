<?php

  require __DIR__ . '/../vendor/autoload.php';

  use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\Routing;

  $request = Request::createFromGlobals();

  $routes = include __DIR__ . '/../src/app/routes.php';

  $context = new Routing\RequestContext();
  $context->fromRequest($request);
  $matcher = new Routing\Matcher\UrlMatcher($routes, $context);

  // $controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';

  // $controller = $request->get('controller', 'home');

  // $path = $request->getPathInfo();

  // $response = new Response();

  // $dir  = __DIR__ . '/../src/app/controllers/%s.php';
  
  // $map = array(
  //   '/home' => 'home',
  //   '/list' => 'list'
  // );

  // if (isset($map[$path])) {
  //   ob_start();
  //   require sprintf($dir, $map[$path]);
  //   $response->setContent(ob_get_clean());
  // } else {
  //   $response->setStatusCode(404);
  //   $response->setContent('Nie ma takiej strony.');
  // }

  // $response->send();