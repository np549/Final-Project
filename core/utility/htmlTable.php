<?php
//final project
namespace utility;
//namespace MyProject\mvcName;

class htmlTable
{
    public static function genarateTableFromMultiArray($array,$st)
    {
date_default_timezone_set('UTC');
          $tableGen = '<table width="100%" border="1" cellpadding="10">';
        $tableGen .= '<tr>';
        //this grabs the first element of the array so we can extract the field headings for the table
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
        //this gets the page being viewed so that the table routes requests to the correct controller
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $heading) {
            $tableGen .= '<th>' . ucwords($heading) . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($array as $record) {
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
                if ($key == 'id') {
if($st=='tsk')
					{
$tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">View</a></td>';
						//$tableGen .= '<td><form action="index.php?page=' . $referingPage . '&action=delete&id=' . $value . '"" method="post" id="form'.$value.'"><button type="submit" form="form'.$value.'" value="delete">Delete</button></form></a></td>';
					
                } else {
$tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">View</a></td>';
					}
                } else {
					if ($key == 'duedate') {
						$tableGen .= '<td>' . date('m-d-Y',strtotime($value)) . '</td>';
					}
					elseif ($key == 'createddate') {
						$tableGen .= '<td>' . date('m-d-Y',strtotime($value)) . '</td>';
					} else{
                    $tableGen .= '<td>' . $value . '</td>';
}
                }
            }
            $tableGen .= '</tr>';
        }

        $tableGen .= '</table>';

        return $tableGen;
    }

    public static function generateTableFromOneRecord($innerArray)
    {
        $tableGen = '<table width="100%" border="1" cellpadding="10"><tr>';

        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
             $tableGen .= '<th>' . ucwords($innerRow) . '</th>';
        }
        $tableGen .= '</tr>';

        foreach ($innerArray as $value) {
            $tableGen .= '<td>' . $value . '</td>';
        }

        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
}

?>
