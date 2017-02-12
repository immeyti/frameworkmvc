<?php

require "../vendor/autoload.php";

error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

$router = require "../App/Router.php";
$router->dispatch($_SERVER["QUERY_STRING"]);



