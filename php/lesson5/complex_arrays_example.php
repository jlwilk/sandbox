<?php

$cars = array();

// $cars["A1"]['name']  = "Bob";
// $cars["A1"]['color']  = "green";

$cars['A'][1]['name']   = "bob";
$cars['A'][1]['color']  = "green";
$cars['A'][2]['name']   = "tom";
$cars['A'][2]['color']  = "red";
$cars['A'][3]['name']   = "dale";
$cars['A'][3]['color']  = "yellow";
$cars['A'][4]['name']   = "ford";
$cars['A'][4]['color']  = "blue";

$cars['B'][1]['name']   = "jill";
$cars['B'][1]['color']  = "purple";
$cars['B'][2]['name']   = "jane";
$cars['B'][2]['color']  = "pink";
$cars['B'][3]['name']   = "jen";
$cars['B'][3]['color']  = "girl orange";
$cars['B'][4]['name']   = "betsy";
$cars['B'][4]['color']  = "baby blue";

$table_body = "";
foreach($cars as $row => $row_info)
{
    $table_body .= "\t<tr>\n";
    foreach($row_info as $parking_id => $owner_info)
    {
        $table_body .= "\t\t<td>";

        $table_body .= "<div>" . $owner_info['name'] . "</div>";
        $table_body .= "<div>" . $owner_info['color'] . "</div>";

        $table_body .= "</td>\n";
                
    }
    $table_body .= "\t</tr>\n";
}



?>
<table border='1'>
<?= $table_body ?>
</table>
<hr />

<table border='1' cellpadding='5'>
    <?php

    foreach($cars as $row => $row_info)
    {
        ?>
        <tr>
        <?php
        foreach($row_info as $parking_id => $owner_info)
        {
            ?>
                <td>
                    <div><?php echo $owner_info['name']; ?></div>
                    <div><?=  $owner_info['color'] ?></div>
                </td>
            <?php
        }
        ?>
        </tr>
        <?php
    }

    ?>
</table>

