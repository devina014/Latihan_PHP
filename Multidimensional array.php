<?php
$marks = array( "vina" => array (
"physics" => 80, "maths" => 85, "chemistry" => 90
),
"qadir" => array ( "physics" => 75, "maths" => 80, "chemistry" => 65
),
"nindi" => array ( "physics" => 75,
"maths" => 70, "chemistry" => 80
)
);
/* Accessing multi-dimensional array values */
echo "Marks for vina in physics : " ;
echo $marks['vina']['physics'] . "<br />";
echo "Marks for qadir in maths : ";
echo $marks['qadir']['maths'] . "<br />";
echo "Marks for nindi in chemistry : " ;
echo $marks['nindi']['chemistry'] . "<br />";
?>