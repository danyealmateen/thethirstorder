<?php
require __DIR__ . '/src/Core/Router.php';
\Core\Router::dispatch(require __DIR__ . '/src/Core/routes.php');
