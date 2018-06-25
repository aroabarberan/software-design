<?php namespace App\Util;

class Table extends Formatter
{   

    public function __construct() {
    }

    public function getFormat(array $elements, string $separator = "") :string {
        $table = "
        <table border=0;>
            <tr>
                <td>Name</td>
                <td>Area</td>
            </tr>";
        foreach ($elements as $key => $element):
            $table .= "<tr>
	                    <td> $element[$key] </td>
	                    <td> $element[$key] </td>
	                </tr>";
        endforeach;
        $table .= "</table>";
        return $table;
    }

}