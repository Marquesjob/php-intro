<?php 

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'jovem';
$categorias[] = 'adulto'; 
$categorias[] = 'idoso';

//print_r($categorias);

$nome = 'eduardo';
$idade = 8;

//var_dump($nome);  --> Retorna o tipo, valor, quantidade de caracteres dinamicamente
//var_dump($idade);

if($idade >= 6 && $idade <= 12) 
{
    for($i =0; $i <= count($categorias); $i++) 
    {
        if($categorias[1] == 'infantil')
            echo "O nadador ".$nome."Compete na categoria Infantil";
    }
}
else if ($idade >= 13 && $idade <= 18)
{
    echo 'jovem';
}
else if ($idade >= 18 && $idade <= 60)
{
    echo 'adulto';
}
else 
{
    echo 'idoso';
}