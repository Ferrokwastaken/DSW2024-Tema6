<?php
$router->map('GET', '/user', 'UserController#index', 'index');
$router->map('GET', '/group', 'GroupController#index', 'indexGroup');
$router->map('GET', '/user/[i:id]', 'UserController#show', 'user-show');
$router->map('GET', '/group/[i:id]', 'GroupController#show', 'group-show');
$router->map('GET', '/user/create', 'UserController#create', 'user-create');
$router->map('GET', '/group/create', 'GroupController#create', 'group-create');
$router->map('POST', '/user', 'UserController#post');
$router->map('POST', '/group', 'GroupController#post');
$router->map('DELETE', '/user/[i:id]', 'UserController#delete');
$router->map('DELETE', '/group/[i:id]', 'GroupController#delete');
$router->map('GET', '/user/[i:id]/edit', 'UserController#edit');
$router->map('GET', '/group/[i:id]/edit', 'GroupController#edit');
$router->map('PUT','/user/[i:id]', 'UserController#put');
$router->map('PUT','/group/[i:id]', 'GroupController#put');
$router->map('GET', '/group/[i:id]/users', 'GroupController#users');
$router->map('POST', '/group/[i:id]/users', 'GroupController#postusers');