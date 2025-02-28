<?php
class Router {
    private static $routes = [];

    public static function handle($method, $path, $file) {
        self::$routes[] = [
            'method' => strtoupper($method),
            'path' => $path,
            'file' => $file
        ];
    }

    public static function dispatch() {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach (self::$routes as $route) {
            if ($route['method'] === $requestMethod && $route['path'] === $requestUri) {
                if (file_exists($route['file'])) {
                    require $route['file'];
                } else {
                    http_response_code(500);
                    echo "Error: File not found!";
                }
                return;
            }
        }

        // If no route matched
        http_response_code(404);
        header('Location: /404');
    }
}