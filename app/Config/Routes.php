<?php

use CodeIgniter\Router\RouteCollection;

$routes->post('/', 'Home::index');
$routes->get('/', 'Home::home');
$routes->get('/leaderboard', 'Home::leaderboard');
