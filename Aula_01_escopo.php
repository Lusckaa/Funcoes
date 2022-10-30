
<?php
function imprimirMensagens() 
{
    echo "Programando? <br>";
    echo "Aprendendo funções em PHP!<br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

echo "<br>";

$variavelInteiro = 1;

function trocaValor() 
{
    $variavelInteiro = 2;
    echo "Durante a função: $variavelInteiro <br>";
}

echo "Antes: $variavelInteiro <br>";
trocaValor();
echo "Depois: $variavelInteiro <br>";

echo "<br>";

function trocaValorDeVerdade() 
{
    global $variavelInteiro;
    $variavelInteiro = 3;
    echo "Durante a função: $variavelInteiro <br>";
}

echo "Antes: $variavelInteiro <br>";
trocaValorDeVerdade();
echo "Depois: $variavelInteiro <br>";