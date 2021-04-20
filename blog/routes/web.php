<?php

$router->get('/details', 'HomeController@studentDetailsSelect');
$router->delete('/details', 'HomeController@studentDetailsDelete');
$router->post('/details', 'HomeController@studentDetailsCreate');
$router->put('/details', 'HomeController@studentDetailsUpdate');

