<?php
    $nilai= [1, 2, 3, 4, 5];
    $temp=0;
    for($i=0; $i<5; $i++){
        if($temp < $nilai[$i]){
            $temp=$nilai[$i]; 
        }
    }
    echo '5. Nilai Maksimal= '.$temp.'</b>';
?>