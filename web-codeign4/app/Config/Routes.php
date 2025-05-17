<?php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('/', 'Home::index');          // Página inicial
    $routes->get('perfil', 'Home::perfil');
    $routes->get('memorias', 'Memorias::index');      // Página de memórias
    $routes->get('exercicios', 'Exercicios::index');  // Página de exercícios
    //$routes->get('perfil', 'Perfil::index');          // Página de perfil
    $routes->get('login', 'Login::index');            // Página de login
   
});