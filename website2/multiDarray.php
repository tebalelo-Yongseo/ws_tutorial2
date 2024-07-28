<?php 

// Define a multidimensional array
$clubs = array(array("Newcastle United","England", 1892),
              array("Gezira Sporting Club", "Egypt", 1882),
              array("Zamalek Sporting Club", "Egypt", 1911),
              array("Bidvest Wits South Africa", "Egypt", 1921));
 
// Print the contents of the array
echo "List of football clubs:<br>";
foreach($clubs as $club)
{
echo "Club Name: " . $club[0] . ", Country: " 
     . $club[1] . ", Year Founded: " . $club[2] . "<br>";

}      

// Sort the array by the first column
sort($clubs);

// Print the sorted array
echo "Sorted array:<br>";
print_r($clubs);

?>