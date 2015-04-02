<?php

$first = "Jason";
$last = "Wilkin";

echo $first . " " . $last . "<br />";


$whole = 7;
$dec = .45;

echo $whole + $dec . "<br />";


$family = array('Jason', 'Trent', 'Eric', 'Annessa');
        
print_r($family);
echo '<br />';


$familyage = array('Jason' => '34',  'Trent' => '32', 'Eric' => '30', 'Annessa' => '26');

print_r($familyage);
echo '<br />';


$myfirstif = 3;

if ($myfirstif == 1)
{
    echo "One";
}
else if ($myfirstif == 2)
{
    echo "Two";
}
else 
{
    echo "I don't know";
}

?>
