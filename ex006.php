<?php 
// Exercicios 6

// Crie um algoritmo que dado um numero aleatorio realiza uma contagem progressiva ou regressiva

/*O programa irá receber um número aleatório e caso seja um número > 0 será realizada uma contagem regressiva, caso seja < 0 será uma contagem progressiva. */

// exemplo:
// $numero_aleatorio = 13;
// saída: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
// $numero_aleatorio = -5;
// saída: -5, -4, -3, -2, -1, 0,

echo "Contagem Progressiva <br> <br>";
        
        for($num=0; $num<=10; $num++){ 
            echo "Contador: $num <br>" ; 
        }
            echo "<br> Contagem Regressiva <br> <br>" ; 
            
            for($num=13; $num>0; $num--){
            echo "Contador: $num <br>";

            }

?>