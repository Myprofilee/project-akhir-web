<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell
 */

/*
|--------------------------------------------------------------------------
| Check if the environment is local
|--------------------------------------------------------------------------
|
| When running the application in a local environment, we'll run the PHP
| built-in server and include the index.php file to serve requests
| instead of the default routing behavior.
|
*/

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;    // Serve the requested file as-is.
}

require_once __DIR__.'/public/index.php';
