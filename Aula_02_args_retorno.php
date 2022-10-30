
<?php
function obterMensagem() 
{
    return "Seja bem vindo(a)!";
}

obterMensagem();
$m = obterMensagem();
echo $m;
echo "<br>", obterMensagem();
echo "<br>";

echo "<br>";

function obterMensagemComNome($nome) 
{
    return "Bem vindo, {$nome}!";
}

echo "<br>", obterMensagemComNome("Edilson");
echo "<br>", obterMensagemComNome("Ebert");

echo "<br>";

function soma($a, $b) 
{
    return $a + $b;
    
}

$x = 4;
$y = 5;
echo "<br>", soma(45, 78);
echo "<br>", soma($x, $y);

