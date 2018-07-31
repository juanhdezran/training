<?php 
    function lettersToNumbers($string){
        $vars = Array(
            "r" => 1,
            "w" => 2,
            "x" => 3,
            "-" => 4
        );
        $cont = 0; $result = ""; $temp = 0;
        for ($i=0; $i < strlen($string); $i++) { 
            $temp += $vars[$string[$i]];
            $cont++;
            if($cont == 3){
                $cont = 0;
                $result .= $temp;
                $temp = 0;                
            }
        }
        return $result;
    }

    $result = lettersToNumbers("rwx-w-rxr");
    echo $result;
?>