<?php

for ( $i = 1; $i <= 10; $i++ ){
    if($i<=5){
        for ( $j = 1; $j <= $i; $j++ ){
            echo "0";
        }
        echo $i;
    }
    if($i>5){
        echo $i;
        for ( $j = 1; $j <= $i; $j++ ){
            echo "0";
        }
    }
    echo "<br>";
}

?>