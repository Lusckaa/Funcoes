
<?php
function saudacao($nome = "Senhor(a)", $sobrenome = "Cliente") 
{
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(null);
echo saudacao(null, null);
echo saudacao("Amado", "Mestre");

echo "<br>";

function anotarPedido($comida, $bebida = "Suco") 
{
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido("Hamburguer");
//anotarPedido("Pizza", "Refrigerante");

echo "<br>";

function anotarPedido2($bebida = "Água", $comida) {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}


anotarPedido2("Refrigerante2", "Pizza2");