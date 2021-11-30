<?php

$idade = 8;

if ($idade>=18){
    echo "maior de idade";
} else {
    echo "menor de idade";
}
echo "<hr>";

# se o sal <5000 inss -- 9%¨
# senao inss - 11%

$func = "Ignez";
$sal = 8800;

if ($sal<5000) {
    echo "inss 9% <br>";
    $inss = $sal * (9/100);
    $salLiq = $sal-$inss;
    echo "O valor de inss é de: {$inss}<br>";
    echo "Salárioo Líquido: {$salLiq}";
} else {
    echo "inss 11%<br>";
    $inss = $sal * (11/100);
    $salLiq = $sal-$inss;
    echo "O valor de inss é de: {$inss}<br>";
    echo "Salárioo Líquido: {$salLiq}";
}

#minha solução
/* 
echo "<hr>";

$login = "felipe";
$senha = 123;

$entradaLogin = "felipe";
$entradaSenha = 123;

if($login == $entradaLogin|$senha == $entradaSenha){
    echo "acesso permitido";
}else {
    echo "acesso negado";
}
*/

$login = "juan1";
$senha = "1234";

if ($login=="juan")
{
    if($senha==123)
    {
        echo "<h2>Conectado ao Sistema</h2>";
    } else
       {
          echo "<h2> Senhas Errados</h2>";
          echo "<h3>Não Conectou</h3>";
       } 
} else {
    echo "login errado<br>";
    echo "Não Conectou";
}
