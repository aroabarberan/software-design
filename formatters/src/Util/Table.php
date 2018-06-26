<?php namespace App\Util;

class Table implements Formatter
{

    public function getFormat(array $elements): string
    {
        $cont = 0;
        $keys = array_keys($elements[0]);

        $table = "<table border=0><tr>";
        foreach ($keys as $key):
            $table .= "<td>$key</td>";
        endforeach;
        $table .= "</tr>";
        foreach ($elements as $element):
            $table .= "<tr>
	            <td>" . $element[$keys[$cont]] . "</td>
	            <td>" . $element[$keys[$cont += 1]] . "</td>
	        </tr>";
            $cont = 0;
        endforeach;
        $table .= "</table>";
        return $table;

    }

}
