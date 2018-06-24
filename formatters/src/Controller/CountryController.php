<?php namespace App\Controller;

use App\Service\CountryService;

class CountryController implements Controller
{

    /** @var CountryService */
    private $service;

    public function __construct(CountryService $service)
    {
        $this->service = $service;
    }

    public function response(string $separator = " ... ", string $design = "simbol"): string
    {
        $countries = $this->service->readCountries();
        $countries = array_map(function ($c) {
            return ['name' => $c->name, 'area' => $c->area];
        }, $countries);
        return $this->getDesign($design, $countries, $separator);
        
    }

    private function getDesign(string $design, array $elements, string $separator)
    {
        switch ($design) {
            case 'table':
                return $this->getTable($elements);                                       
            case 'simbol':
                return $this->getSimbol($elements, $separator);
            default:
                return $this->getTable($elements);                
        }
    }

    private function getTable(array $elements)
    {
        $table = "
        <table border=0;>
            <tr>
                <td>Name</td>
                <td>Area</td>
            </tr>";
            foreach ($elements as $element):
                $table .= "<tr>
                    <td> $element[name] </td>
                    <td> $element[area] </td>
                </tr>";
            endforeach;
        $table .= "</table>";
        return $table;
    }

    private function getSimbol(array $elements, string $separator)
    {
        $elements = array_map(function ($c) use ($separator) {
            return implode($separator, $c);
        }, $elements);

        return '- ' . implode("<br>- ", $elements);
    }
}
