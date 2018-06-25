<?php namespace App\Util;

class Design
{

    public function __construct()
    {
    }

    public function getDesign(string $design, array $elements, string $separator)
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
        foreach ($elements as $key => $element) :
            $table .= "<tr>
                    <td> $element[$key] </td>
                    <td> $element[$key] </td>
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
