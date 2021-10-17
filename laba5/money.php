<?php
$i = 0;
$year = 2021;
for($i = 0;$i <=  intval($_POST['years']); $i++){
    $res = round($_POST['sum'] * pow((1 + ($_POST['proc']/100)), $i), 2);
    echo $year+$i . ' ' . $res . '<br>';
}