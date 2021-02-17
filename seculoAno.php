<?php
<!-- Desenvolva uma função que receba como parametro o ano e retorne o século ao qual este ano faz parte. 
O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

Exemplos para teste:

Ano 1905 = século 20
Ano 1700 = século 17 -->


function seculoAno($ano){
$seculo = 0;
            if($ano > 0 && $ano < 9999){

        if($ano % 10 >= 1 && $ano % 10 < 9){
             $seculo = $ano / 100 + 1;
       
        }else{
                    echo "Termina em 0";
              $seculo = $ano / 100;
        }
        $seculo = number_format($seculo, 0, '.', '');
                        
        echo "Ano ".$ano." = século ".$seculo;
     
     



    }else{
        echo "Ano deve estar entre 1 e 9999";
    }
 //Return $seculo;

}

?>
