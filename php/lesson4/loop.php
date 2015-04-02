<div>For Loop</div>
<br />

<?php

$array = array(1,2,3,4,5,6,7,8,9);
$count = 0;

for ($array = 1; $array < 10; $array++) 
{
    $count++;
    echo $array;
        
    if ($count == 3)
    {
        echo "<br />";
        $count = 0;
    }
}

?>   

<br />
<br />
<div>Foreach Loop</div>
<br />


<?php

$family = array
    (
    "Jason" => 34,
    "Trent" => 32,
    "Eric" => 30,
    "Annessa" => 26,
    );
            
foreach ($family as $key => $age)
    {
        echo "<div>" . $key . " is " . $age . " years old.</div>";
    }

?>

<br />
<br />
<div>While Loop</div>
<br />

<?php

$array = array(13, 75, 187);
$math = 0;
$i = 0;

while ($math == false)
    {
        echo $array[0];
        $math += $i;
    }



?>

























