<style>
    
#tbl_vending_machine
{
    float:left;    

    width:350px; 
    height:400px;
    background-color:#8C6954;
    border-collapse: collapse;

}
    
.candy_div
{

    float:left; /* need this for the home work */
    color:lightblue;
    font-family:Arial;
    font-weight:bold;
    height:100px;
    width:100px;
    padding:10px;
    margin:5px;

    border-radius: 25px;/* need this for the home work */
 
}
    
</style>

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
$vend['D'][2]['candy']  = "Skittles";
$vend['D'][2]['price']  = "$1.01";
$vend['D'][3]['candy']  = "Pop Rocks";
$vend['D'][3]['price']  = "$10.10";
$vend['D'][4]['candy']  = "Sour Patch Kids";
$vend['D'][4]['price']  = "$2.99";

$i = 1;

// This is the header loop and the blank first spot.

$table_body .= "\t<tr>\n";
$table_body .= "\t\t<td>" . "" . "</td>\n";

foreach($vend as $row => $row_info)
{
    $table_body .= "\t\t<td>" . $row . "</td>\n";
}
$table_body .= "\t</tr>\n";

//This is the body and column loop

foreach($vend as $row => $row_info)
{
    // This creates the first column    
    $table_body .= "\t<tr>\n";
    $table_body .= "\t\t<td>" . $i . "</td>\n"; 
    $i++;
    foreach($row_info as $column_id => $candy_info)
    {     
        // This loops through and pust the data in
        $table_body .= "\t\t<td>";        
        $table_body .= "<div class='candy_div'>";        
        $table_body .= "<div>" . $candy_info['candy'] . "</div>";
        $table_body .= "<div>" . $candy_info['price'] . "</div>";
        $table_body .= "</div>";
        $table_body .= "</td>\n";        
    }
    $table_body .= "\t</tr>\n";
}



?>

<table id='tbl_vending_machine'>
<?= $table_body ?>
</table>
