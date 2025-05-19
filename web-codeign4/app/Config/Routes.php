<?php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('', ['namespace' => 'App\Controllers'], function($routes) {
    
    // Página inicial
    $routes->get('/', 'IndexController::index');          
    $routes->get('perfil', 'IndexController::perfil');
    $routes->get('memorias', 'IndexController::memorias');      
    $routes->get('exercicio', 'IndexController::exercicio');  
    $routes->get('loginregister', 'IndexController::loginregister'); 
    $routes->get('gerenciarusers', 'IndexController::gerenciarusers'); 

    //$routes->get('memorias', 'Memorias::index');      
    //$routes->get('exercicios', 'Exercicios::index');  
    //$routes->get('perfil', 'Perfil::index');          
    //$routes->get('login', 'Login::index');            
   
});