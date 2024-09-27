<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Rota principal
$routes->get('/', 'Teste::index');

// Rotas de usuários
$routes->get('/login', 'UserController::login');
$routes->post('/usuarios/cadastrar', 'UserController::createUser');
$routes->post('/usuarios/login', 'UserController::authenticate');
$routes->get('/usuarios/logout', 'UserController::logout');

// Rotas de atividades
$routes->get('/atividades', 'AtividadesController::listar');
$routes->post('/atividades/criar', 'AtividadesController::criar');
$routes->get('/atividades/excluir/(:num)', 'AtividadesController::excluir/$1');
$routes->post('/atividades/editar/(:num)', 'AtividadesController::editar/$1');
