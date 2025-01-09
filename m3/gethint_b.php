<?php
// Array with names 
$a = array(
    "Anna", "Brittany", "Cinderella", "Diana", "Eva", "Fiona", "Gunda",
    "Hege", "Inga", "Johanna", "Kitty", "Linda", "Nina", "Ophelia", "Petunia",
    "Amanda", "Raquel", "Cindy", "Doris", "Eve", "Exita", "Sunniva", "Tove",
    "Unni", "Violet", "Liza", "Elizabeth", "Ellen", "Wenche", "Vicky"
);

// Fetch q parameter from URL
$q = $_REQUEST["q"];
$hint = "";

// Lookup all hints from the array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q); 
    $len = strlen($q);
    foreach ($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= "<br/> $name"; // Concatenate the name with a comma
            }
        }
    }
}

// Output the result
echo $hint === "" ? "No suggestions" : $hint;
?>
