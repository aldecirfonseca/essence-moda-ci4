<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get("quemsomos", "Home::quemsomos");
$routes->get("contato", "Home::contato");
$routes->post("contatoEnviaEmail", "Home::contatoEnviaEmail");
$routes->get("login", "Home::login");
$routes->get("criarNovaConta", "Home::criarNovaConta");
$routes->get("carrinho-compras", "Home::carrinhoCompras");
$routes->get("carrinho-pagamento", "Home::carrinhoPagamento");
$routes->get("produtoDetalhes/(:num)", "Home::produtoDetalhes/$1");

/**
 * Login
 */

$routes->group("Login", static function ($routes) {
    $routes->post("signIn", "Login::signIn");
    $routes->get("signOut", "Login::signOut");
});

/**
 * Sistema
 */

$routes->group("Sistema", static function ($routes) {
    $routes->get("home", "Sistema::home");
});


/**
 * Rotas para área administrativa
 */

$routes->group("Categoria", static function ($routes) {
    $routes->get("/"                        , "Categoria::index");
    $routes->get("lista"                    , "Categoria::index");
    $routes->get("form/(:segment)/(:any)"   , "Categoria::form/$1/$2");
    $routes->post("store"                   , "Categoria::store");
    $routes->post("delete"                  , "Categoria::delete");
});

/**
 * Rotas de Produto
 */

$routes->group("Produto", static function ($routes) {
    $routes->get("/"                        , "Produto::index");
    $routes->get("lista"                    , "Produto::index");
    $routes->get("form/(:segment)/(:any)"   , "Produto::form/$1/$2");
    $routes->post("store"                   , "Produto::store");
    $routes->post("delete"                  , "Produto::delete");
});