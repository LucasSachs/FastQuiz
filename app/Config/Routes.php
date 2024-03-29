<?php

use CodeIgniter\Router\RouteCollection;

$routes->post('/', 'Home::index', ['as' => 'home']);
$routes->get('/', 'Home::home', ['as' => 'home']);
$routes->get('/leaderboard', 'Home::leaderboard', ['as' => 'leaderboard']);
$routes->get('/feedback', 'Home::feedback', ['as' => 'feedback']);
$routes->post('/feedback', 'Home::feedback_post', ['as' => 'feedback_post']);
