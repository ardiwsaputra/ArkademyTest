<?php

function sortBilangan($bilangan)
{
    $data = explode(0, $bilangan);
    
    for($i=0; $i < count($data); $i++){
        $sorted_array = str_split($data[$i]);
        sort($sorted_array);
        echo implode('', $sorted_array);
    }

}

sortBilangan(123056798810123);

?>