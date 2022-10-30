
<?php
function soma($a, $b) 
{
    return $a + $b;
}

echo soma(14, 15) . "<br>";
echo soma(6, 5, 4) . "<br>";

echo "<br>";

/*function somaCompleta(...$numeros) 
{
    $soma = 0;
    foreach($numeros as $num) 
    {
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5);*/

echo "<br>";

/*function membros($titular, ...$dependentes) 
{
    echo "Titular: $titular <br>";
    if($dependentes) 
    {
        foreach($dependentes as $dep) 
        {
            echo "Dependente: $dep <br>";
        }
    }
}

echo "<br>";
membros("Fulano", "Beltrano", "Sicrano", "Joãozinho");

echo '<br>';
membros("Edilson", "Ebert");*/