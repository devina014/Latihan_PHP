<<?php
/* First method to associate create array. */
$salaries = array(
    "vina" => 2000,
    "putri"    => 1000,
    "nindi"     => 500
);

echo "Salary of vina is ". $salaries['vina'] . "<br />";
echo "Salary of putri is ". $salaries['putri']. "<br />";
echo "Salary of nindi is ". $salaries['nindi']. "<br />";

/* Second method to create array. */
$salaries['vina'] = "high";
$salaries['putri'] = "medium";
$salaries['nindi'] = "low";

echo "Salary of vina is ". $salaries['vina'] . "<br />";
echo "Salary of putri is ". $salaries['putri']. "<br />";
echo "Salary of nindi is ". $salaries['nindi']. "<br />";
?>
