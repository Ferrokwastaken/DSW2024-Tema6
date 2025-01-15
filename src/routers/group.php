<?php
$router->map('GET', '/group', 'GroupController#index', 'index');
$router->map('GET', '/group/[i:id]', 'GroupController#show', 'group-show');
$router->map('GET', '/group/create', 'GroupController#create', 'group-create');