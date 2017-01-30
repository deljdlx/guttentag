<?php



$router=new \Phi\Routing\Router();

$router->get('`.*`', function() {
    include(__DIR__.'/template/default.php');
});


$router->run();