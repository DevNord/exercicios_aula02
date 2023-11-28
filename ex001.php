<?php
/*Exercicios 1

Desenvolva um programa PHP, que executa uma contagem entre 0 e 100 e conta quais numeros são pares e quantos numeros são impares, no final o programa deve imprimir na tela o resultado.

Exemplo de saída

3 número são pares [2,6,8]
1 número são impares [3]*/

//imprimir numeros impares de 0 a 100

 $contador = 0;
 $par = 0;
 $impar = 0;

 while($contador <= 10) {
     if($contador % 2 ==0) {
        $par++;
     };
    if($contador % 2 != 0){
        $impar++;
    }
    $contador++;
     
 }
 echo "<br> Entre 0 e 10 existem $par numeros pares.";
 echo "<br> Entre 0 e 10 existem $impar numeros impares.";


?>