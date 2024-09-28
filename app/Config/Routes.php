<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Rota principal

$routes->get('/', 'UserController::login'); // Exibe a página de login na rota principal

// Rotas de login e registro
$routes->get('/login', 'UserController::login'); // Exibe o formulário de login
$routes->post('/usuarios/login', 'UserController::authenticate'); // Processa o login

$routes->get('/usuarios/register', 'UserController::register'); // Exibe o formulário de cadastro
$routes->post('/usuarios/cadastrar', 'UserController::createUser'); // Processa o cadastro

$routes->get('/atividades', 'ActivitiesController::index');
$routes->get('/atividades/criar', 'ActivitiesController::create');
$routes->post('/atividades/criar', 'ActivitiesController::store');
$routes->post('atividades/update/(:num)', 'ActivitiesController::update/$1');
$routes->get('atividades/edit/(:num)', 'ActivitiesController::edit/$1');
$routes->get('atividades/view/(:num)', 'ActivitiesController::view/$1'); // Rota para ver detalhes da atividade
$routes->get('/atividades/excluir/(:num)', 'ActivitiesController::delete/$1');
$routes->post('/atividades/alterarStatus/(:num)', 'ActivitiesController::alterarStatus/$1');
$routes->get('logout', 'ActivitiesController::logout');
$routes->get('atividades/verAtividadesPorData/(:any)', 'ActivitiesController::verAtividadesPorData/$1');













// <?php

// use CodeIgniter\Router\RouteCollection;

// /**
//  * @var RouteCollection $routes
//  */

// // Rota principal
// $routes->get('/', 'Teste::index');
// //$routes->get('home', 'Home::index'); // Define a rota para a página inicial


// // Rotas de usuários
// $routes->get('/login', 'UserController::login');
// $routes->post('/usuarios/cadastrar', 'UserController::createUser');
// $routes->post('/usuarios/login', 'UserController::authenticate');
// $routes->get('/usuarios/logout', 'UserController::logout');

// // Rotas de atividades
// $routes->get('atividades', 'AtividadeController::index'); // Rota para a página de atividades
// $routes->get('/atividades', 'AtividadesController::listar');
// $routes->post('/atividades/criar', 'AtividadesController::criar');
// $routes->get('/atividades/excluir/(:num)', 'AtividadesController::excluir/$1');
// $routes->post('/atividades/editar/(:num)', 'AtividadesController::editar/$1');
