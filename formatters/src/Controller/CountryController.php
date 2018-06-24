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

    public function response(string $separator, string $design): string
    {
        $countries = $this->service->readCountries();

        $countries = array_map(function ($c) {
            return ['name' => $c->name, 'area' => $c->area];
        }, $countries);
        $this->getDesign($design, $countries, $separator);
        return "";
    }

    private function getDesign(string $design, array $elements, string $separator)
    {
        return [
            'simbol' => $this->getSimbol($elements, $separator),
            'table' => $this->getTable($elements),            
        ];
    }

    private function getTable(array $elements)
    {
        ?>
        <table border=0;>
            <tr>
                <td>Name</td>
                <td>Area</td>
            </tr>
            <?php foreach ($elements as $element): ?>
                <tr>
                    <td><?=$element['name']?></td>
                    <td><?=$element['area']?></td>
                </tr>
            <?php endforeach;?>
        </table>
        <?php
}

    private function getSimbol($elements, $separator)
    {
        $elements = array_map(function ($c) use ($separator) {
            return implode($separator, ['name' => $c->name, 'area' => $c->area]);
        }, $elements);

        return implode("<br>-", $elements);
    }
}
