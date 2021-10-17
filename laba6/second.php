<?php
$surnames = array('Aaron', 'DiCaprio', 'Fox', 'Pitt', 'Reeves');
$n = 0;
$isFounud = FALSE;
for($i = 0; $i != count($surnames); $i++){
    if(soundex($surnames[$i]) == soundex($_POST['surname'])){
        echo 'Похожая фамилия ' . $surnames[$i];
        $isFounud = TRUE;
        break;
    }
}
if($isFounud == FALSE){
    echo 'Похожих фамилий не найдено';
}