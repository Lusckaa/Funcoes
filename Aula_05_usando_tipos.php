
<?php
function somar1($a, $b) 
{

    return $a + $b;
}

echo somar1(1, 2) . "<br>";
echo somar1(1.7, 2.5) . "<br>";

echo "<br>";

function somar2(int $a, int $b)
{
    return $a + $b;
}

echo somar2(1, 2) . "<br>";
echo somar2(1.7, 2.5) . "<br>";

echo "<br>";

