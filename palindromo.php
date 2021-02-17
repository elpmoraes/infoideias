<?php
<!-- Desenvolva uma função que receba como parametro uma string e 
responda se a string é um palíndromo sim (true) ou não (false).

entenda o que é um palindromo https://brasilescola.uol.com.br/o-que-e/portugues/o-que-e-palindromo.htm

strings com apenas 1 caracter são consideradas palindromo

Exemplo para teste

String "aabaa"  = true
String "a" = true
String "abac" = false -->


function palindromo($str){

 if (strrev($str) == $str){   
   
       return true;
    } 
    else{ 

       return false;
    } 

}

?>
