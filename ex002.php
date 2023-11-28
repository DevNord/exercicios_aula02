<?php 
    //  Exercicio 2

//  Desenvolva um programa PHP, que indentifica os numeros que são multiplo por 2, 3 e 5 entre 10 e 50 no final do processamento esse resultado deve ser impresso na tela;

 $numero = 10;
 echo  "<br>Numeros multiplos de 2: ";
    do{
    
            if($numero % 2 == 0){
                echo $numero . ',';
            }
            $numero ++;
    }while($numero <= 50);

    $numero = 10;
    echo  "<br>Numeros multiplos de 3: ";
    do{
    
            if($numero % 3 == 0){
                echo $numero . ',';
            }
            $numero ++;
    }while($numero <= 50);

    $numero = 10;
    echo  "<br>Numeros multiplos de 5: ";
    do{
    
            if($numero % 5 == 0){
                echo $numero . ',';
            }
            $numero ++;
    }while($numero <= 50);
?>