<?php namespace App;

require __DIR__ . '/../vendor/autoload.php';

use App\Router\Router;
use App\Exception;
use App\Service;
use App\Controller;
use App\Model;
use App\Util\Design;

$design = new Design();

// Declare services
$languageService = new Service\LanguageService();
$countryService = new Service\CountryService();
$addressService = new Service\AddressService();

// Declare controllers
$languageController = new Controller\LanguageController($languageService, $design);
$countryController = new Controller\CountryController($countryService, $design);
$addressController = new Controller\AddressController($addressService, $design);

// Declare routes
$router = new Router();
$router->AddRoute($languageController, "/languages");
$router->AddRoute($countryController, "/countries");
$router->AddRoute($addressController, "/addresses");

// Show response
try {
    $calledController = $router->Enroute($_SERVER['REQUEST_URI']);
    echo $calledController->response();
} catch (Exception\NotFound $ex) {
    echo "ERROR 404. NOT FOUND.";
}
