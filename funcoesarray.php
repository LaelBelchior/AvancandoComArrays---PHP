<?php

$idades = [10, 15, 23, 19, 99, 26];

echo $idades[4] . PHP_EOL;
echo $idades[count($idades) - 3] . PHP_EOL;

echo end($idades) . PHP_EOL;

$idadesFiltradas = array_filter($idades, function($item){
    return $item >= 18;
});

var_dump($idadesFiltradas);

$nomes = ['Lael', 'Gabrielle', 'Yuri'];
$eu = strtoupper($nomes[0]);
$ela = strtoupper($nomes[1]);
$ele = strtoupper($nomes[2]);
echo $eu . PHP_EOL;
echo $ela . PHP_EOL;
echo $ele . PHP_EOL;

$nomes = array_map(function ($item) {
    return strtoupper($item);
}, $nomes);

var_dump($nomes);

function transformarEmCaixaBaixa($valor) {
    return strtolower($valor);
}

$nomes = array_map('transformarEmCaixaBaixa', $nomes);
var_dump($nomes);