<?php 

    function saklar($x)
    {
        if($x==1)
        {
            lampuHidup($x);
        } 
        else if($x==2)
        {
            lampuHidup($x);
        } 
        else if ($x==3)
        {
            lampuHidup($x);
        } else {
            echo "Saklar Tidak Tersedia";
        }
    }

    function lampuHidup($x)
    {
        $totalLampu = 15;
        $lampu = array();
        $angka = 0;
        for($a=1; $a<=$totalLampu; $a++)
        {
            $angka = $x * $a;
            if($angka <= 15)
            {
                array_push($lampu, $angka);
            }
        }

        shuffle($lampu);
        echo "Lampu Hidup Nomor:";
        for($i=0; $i<count($lampu); $i++)
        {
            echo $lampu[$i]." ";
        }
    }
    
    saklar(3);
?>