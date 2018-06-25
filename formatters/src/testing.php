<?php namespace App;

require __DIR__ . '/../vendor/autoload.php';

use App\Router\Router;
use App\Exception;
use App\Service;
use App\Controller;
use App\Model;
use App\Util\Design;
use App\Util\Formatter;
use App\Util\Table;
use App\Util\Simbol;

$design = new Design();

// Declare services
$countryService = new Service\CountryService();

// Declare controllers
$formatterCountryController = new Controller\FormatterCountryController($countryService, new Simbol());

// Declare routes
$router = new Router();
$router->AddRoute($formatterCountryController, "/formatters");

// Show response
try {
    $calledController = $router->Enroute($_SERVER['REQUEST_URI']);
    echo $calledController->response();
} catch (Exception\NotFound $ex) {
    echo "ERROR 404. NOT FOUND.";
}
