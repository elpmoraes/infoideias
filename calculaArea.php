<?php
<!-- Desenvolva uma função que receba como parametro um número da Área e retorne a quantidade de quadrados que compôem a área

entenda a sequência lógica das ÁREAS analisando a imagem abaixo.

Exemplo para teste

N 2 = 5 
N 3 = 13 -->

function calculaArea($num){


    if($num >= 1 && $num < 9999){

        $area = ((2*$num*$num)-(2*$num) +1);  
        echo "N ".$num." = ".$area;

    }else{
        echo "O valor deve estar entre 1 e 9999.";
    }


}

?>
