<?php

echo "Welcome to the best application in the world.";

echo "<br>All things open is cool";
$html = file_get_contents('http://www.google.com/');

// Find all images
foreach($html->find('img') as $element)
       echo $element->src . '<br>';

// Find all links
foreach($html->find('a') as $element)
       echo $element->href . '<br>';
?>
