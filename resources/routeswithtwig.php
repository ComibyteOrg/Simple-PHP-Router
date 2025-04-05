<?php
namespace App\Routes;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Routes {
    private static $routes = [];
    private static $twig;

    public static function initTwig() {
        // Initialize Twig loader and environment
        $loader = new FilesystemLoader('resources/view'); // Set the correct path to your views directory
        self::$twig = new Environment($loader, [
            'cache' => false, // Use false in development for no caching
        ]);
    }

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
        $queryString = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY) ?? '';

        foreach (self::$routes as $route) {
            if ($route['method'] === $requestMethod) {
                // Convert route path to regex pattern (replace {param} with regex)
                $pattern = preg_replace('/\{([^\/]+)\}/', '([^/]+)', $route['path']);
                $pattern = "#^" . $pattern . "$#";

                if (preg_match($pattern, $requestUri, $matches)) {
                    array_shift($matches); // Remove full match

                    // Extract parameter names from route definition
                    preg_match_all('/\{([^\/]+)\}/', $route['path'], $paramNames);
                    $paramNames = $paramNames[1];

                    // Assign extracted values to $_GET
                    $_GET = array_combine($paramNames, array_pad($matches, count($paramNames), null));

                    // Ensure query string exists before calling parse_str()
                    $queryParams = [];
                    if (!empty($queryString)) {
                        parse_str($queryString, $queryParams);
                    }
                    $_GET = array_merge($_GET, $queryParams);

                    // Check if it's a Twig file (assuming .twig extension for views)
                    if (file_exists("resources/view/{$route['file']}")) {
                        echo self::$twig->render($route['file'], $_GET);  // Render the Twig template
                    } else {
                        http_response_code(500);
                        echo "<b>Error:</b> File not found!";
                    }
                    return;
                }
            }
        }

        // If no route matched
        http_response_code(404);
        echo self::$twig->render('404.twig'); // Render 404 page
    }
}
