<?php
$array = [];
$tok = strtok($_POST['input'], ' ');

while($tok) {
    $array[] = $tok;
    $tok = strtok(' ');
}
for($i = 0; $i < count($array); $i++){
    echo $array[$i] . '<br>';
}