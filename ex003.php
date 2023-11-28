<?php 
// Exercicio 3

// Crie um programa que gera automaticamente os dados de uma pessoa e insere essas informações em um array, após inserir no array.

// O programa deve analisar quantas pessoas são do genero Masculino, quantas pessoas do genero masculino tem idade acima de 20 anos e quantos deles tem mais de 50 anos, no final deve ser feito um relatorio com a analise feita desses dados e imprimir na tela.

// obs: a quantidade de pessoas gerada automaticamente é por criterio de vocês pode ser 5, 10, ou 30, fica a criterio de vocês;
// Uma Dica Usem a função do php rand(min, max) para gerar os dados automaticamente e adicionar no array de pessoas

// $pessoa1 ['nome' => 'Daniel',
//         'idade' => '25',
//         'sexo' => 'Masculino'
// ];  
// $pessoa2 ['nome' => 'Jurema',
//         'idade' => '42',
//         'sexo' => 'Feminino'
// ];
// $pessoa3 ['nome' => 'Juarez',
//         'idade' => '52',
//         'sexo' => 'Masculino'
// ];
$dadosPessoas = array
(
        array("Nome", "Genero", "Idade"),
        array("Rafael", "Masculino", "55"),
        array("Jurema", "Feminino", "25"),
        array("Welington", "Masculino", "15"),
        array("Joelma", "Feminino", "55"),
        array("João", "Masculino", "45"),

);

        $generomasc = $dadosPessoas[rand(0, count($dadosPessoas)-1)];
                $generoescolhido = $dadosPessoas[0][2][4];
                $nome = "";
                $saida = "";
                for($row=0; $row < 2; $row+=1){
                        $indice = rand(0, count($dadosPessoas)-1);
                                if($nome == $generoescolhido){
                                        $saida = "$nome é do genero masculino."
                                } else {
                                        $saida = "não é do genero masculino"
                                }
                                echo  "<p>".$saida."<p>";
                }       

        // if ($dadosPessoas ->genero == 'Masculino'){
        //         echo "É do gênero masculino.";
        // };
        //Ainda estou pensando sobre esse exercicio
?>
