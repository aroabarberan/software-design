<?php namespace App;

require __DIR__ . '/../vendor/autoload.php';

use App\Router\Router;
use App\Util\Design;
use App\Util\Formatter;
use App\Util\Table;
use App\Util\Simbol;
use App\Util\UpperCaseConvert;
use App\Util\LowerCaseConvert;
use App\Exception;
use App\Service;
use App\Controller;
use App\Model;

$simbol = new Simbol(" ---> ", "-");
$table = new Table();
$upperCase = new UpperCaseConvert();
$lowerCase = new LowerCaseConvert();

// Declare services
$languageService = new Service\LanguageService();
$countryService = new Service\CountryService();
$addressService = new Service\AddressService();

// Declare controllers
$languageController = new Controller\LanguageController($languageService, $simbol, $upperCase);
$countryController = new Controller\CountryController($countryService, $table, $lowerCase);
$addressController = new Controller\AddressController($addressService, $table, $upperCase);

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
