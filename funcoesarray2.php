<?php

$numeros = range(1, 15);

foreach ($numeros as $item) {
    echo $item . PHP_EOL;
}

$letras = range('a', 'z', 2); //O terceiro parametro - numero 2 - serve para definir o intervalo.

foreach ($letras as $letra) {
    echo $letra . PHP_EOL;
}

$aparelhos = ['Celular', 'Televisão', 'Rádio'];

if(in_array('Celular', $aparelhos)){
    echo 'O nosso array possui o seu item!' . PHP_EOL;
} else {
    echo 'Procure em outro array!' . PHP_EOL;
}

$posicaoNoArray = array_search('Rádio', $aparelhos);
echo "Seu item está na posição $posicaoNoArray do nosso array!" . PHP_EOL;
