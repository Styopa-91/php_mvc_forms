<?php

$router->get('emp', 'EmployeeController@index');
$router->get('emp-add', 'EmployeeController@create');
$router->get('emp-view/{id}', 'EmployeeController@show');
$router->post('emp', 'EmployeeController@store');


$router->get('dep', 'DepartmentController@index');
$router->get('dep-add', 'DepartmentController@create');
$router->post('dep', 'DepartmentController@store');

$router->delete('dep/{id}', 'DepartmentController@delete');
