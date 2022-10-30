
<?php

$soma = function ($a, $b) 
{
    return $a + $b;
};

echo $soma(1, 2) . "<br>";


echo "<br>";


function executar($a, $b, $op, $funcao) 
{
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
}

executar(2, 3, '+', $soma);


echo "<br>";


$multiplicacao = function($a, $b) 
{
    return $a * $b;
};

executar(2, 3, '*', $multiplicacao);

