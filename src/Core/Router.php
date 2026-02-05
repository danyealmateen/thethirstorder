<?php
namespace Core;

class Router {
    public static function dispatch(array $routes): void {
        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
        $view = $routes[$uri] ?? null;
        if ($view) require __DIR__ . '/../Views/' . $view . '.php';
    }
}
