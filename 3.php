<?php

function segitiga_kosong($jumlah)
{
    for($a=1; $a<=$jumlah+1; $a++){
        echo ' *  ';
    }
    echo "\n";
    for($a=1; $a<=$jumlah; $a++){
        for($b=1; $b<=$a; $b++){
            echo '  ';
        }
        for($c=$jumlah; $c>=$a; $c-=1){
            if(($c==$jumlah) || ($c==$a)){
                echo ' *  ';
            } else {
                echo '    ';
            }
        }
        echo "\n";
    }
}

segitiga_kosong(5);

?>