<?php
$router->map('GET', '/group', 'GroupController#index', 'index');
$router->map('GET', '/group/[i:id]', 'GroupController#show', 'group-show');
$router->map('GET', '/group/create', 'GroupController#create', 'group-create');
$router->map('DELETE', '/group/[i:id]', 'GroupController#delete');
$router->map('GET', '/group/[i:id]/edit', 'GroupController#edit');
$router->map('PUT','/group/[i:id]', 'GroupController#put');