<?php

$vend['A'][1]['candy']  = "M&M's";
$vend['A'][1]['price']  = "$1.13";
$vend['A'][2]['candy']  = "Reese's Peanut Butter Cups";
$vend['A'][2]['price']  = "$2.50";
$vend['A'][3]['candy']  = "Trident";
$vend['A'][3]['price']  = "$1.00";
$vend['A'][4]['candy']  = "Almond Joy";
$vend['A'][4]['price']  = "$1.77";
$vend['B'][1]['candy']  = "Big Hunk";
$vend['B'][1]['price']  = "$1.01";
$vend['B'][2]['candy']  = "Reese's Pieces";
$vend['B'][2]['price']  = "$1.55";
$vend['B'][3]['candy']  = "3 Musketeers";
$vend['B'][3]['price']  = "$1.89";
$vend['B'][4]['candy']  = "Twix";
$vend['B'][4]['price']  = "$2.03";
$vend['C'][1]['candy']  = "Kit Kat";
$vend['C'][1]['price']  = "$3.17";
$vend['C'][2]['candy']  = "Snickers";
$vend['C'][2]['price']  = "$2.29";
$vend['C'][3]['candy']  = "Nutrageous";
$vend['C'][3]['price']  = "$4.20";
$vend['C'][4]['candy']  = "Slim Jim";
$vend['C'][4]['price']  = "$1.63";
$vend['D'][1]['candy']  = "Runts";
$vend['D'][1]['price']  = "$7.10";
$vend['D'][2]['candy']  = "skittles";
$vend['D'][2]['price']  = "$1.01";
$vend['D'][3]['candy']  = "Pop Rocks";
$vend['D'][3]['price']  = "$10.10";
$vend['D'][4]['candy']  = "Sour Patch Kids";
$vend['D'][4]['price']  = "$2.99";


$table_body = "";
$i = 0;
$var = 1;

foreach($vend as $row => $row_info)
{
    $table_body .= "\t<tr>\n";
    foreach($row_info as $column_id => $candy_info)
    {
        $table_body .= "\t\t<td>";
        if ($i == 0)
        {           
            $table_body .= " " . "</td>\n";
            $table_body .= "\t\t<td><div>" . "A" . "</div></td>\n";
            $table_body .= "\t\t<td><div>" . "B" . "</div></td>\n";
            $table_body .= "\t\t<td><div>" . "C" . "</div></td>\n";
            $table_body .= "\t\t<td><div>" . "D" . "</div></td>\n";
            $table_body .= "\t</tr>\n";
            $table_body .= "\t<tr>\n";
            $table_body .= "\t\t<td><div>" . $var . "</div></td>\n";
            $table_body .= "\t\t<td>";
            $i = 1;
            $var = 2;
        }
        if ($i == 5)
        {
            $table_body .= "<div>" . $var . "</div></td>\n";
            $table_body .= "\t\t<td>";
            $var++;
            $i = 1;
        }        
        $table_body .= "<div>" . $candy_info['candy'] . "</div>";
        $table_body .= "<div>" . $candy_info['price'] . "</div>";
        $table_body .= "</td>\n";
        $i++;
                
    }
    $table_body .= "\t</tr>\n";
}

?>

<table border='2'>
<?= $table_body ?>
</table>
