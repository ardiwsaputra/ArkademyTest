<?php

function hitungPohon($tinggiAwal, $tahun)
{
   
    $tinggiPohon = 0;
    for($a=1; $a<=$tahun; $a++)
    {
        $musimSemi = $tinggiAwal + 1;
        $musimPanas = $musimSemi * 3;
        $musimGugur = $musimPanas - 1.5;
        $musimDingin = ($musimGugur * (15/100)) + $musimGugur;
        $tinggiPohon = $musimDingin + $tinggiPohon;
        if(($a % 2 ) == 0)
        {
            $tinggiPohon = $tinggiPohon / 2;
        } else
        {
            $tinggiPohon = $tinggiPohon;
        }
    }
    
    echo $tinggiPohon."m";
}

hitungPohon(2, 8);

?>