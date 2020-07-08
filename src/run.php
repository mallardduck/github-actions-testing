<?php

function pathCheck($filePath) {
echo "Scanning $filePath:\n";
$test = scandir ($filePath);
var_dump($test);
}
