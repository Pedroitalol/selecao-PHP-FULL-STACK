<?php
/*
Olá, seja bem vindo a resolução da seleção Programador PHP FULL STACK.

Autor: Pedro Ítalo Lobo Matos
Email: pedroitalomatos@gmail.com
Fone(whatsapp): (88) 9 9257-7238

Descrição: estão descritas abaixo as soluções das 4 questões da seleção-
todas feitas de forma correta, e tentando seguir as melhores práticas de-
programação possíveis. Todas foram feitos em funções, mesmo a terceira-
pedindo apenas um programa, achei mais organizado deixar em forma de-
função mesmo.

Agradecimentos: Achei uma boa experiência fazer esse teste. Obrigado pela-
oportunidade de concorrer a essa vaga, espero passar para as demais etapas :).

*/

// PRIMEIRA QUESTÃO:
function SeculoAno($ano){
    if($ano%100 != 0){
        return (int) ($ano/100) + 1;
    }else{
        return (int) ($ano/100);
    }
    
}

// SEGUNDA QUESTÃO:
function Primos($inicial,$final){
    $primos = [];
    for($i = $inicial + 1; $i < $final; $i++){
        if(VerificaSePrimo($i)){
            $primos[] = $i;
        }
    }
    return $primos;
}

// FUNÇÃO AUXILIAR PARA QUESTÃO 2
function VerificaSePrimo($numero){
    for($i = 2; $i < $numero; $i++){
        if($numero % $i == 0){
            return false;
        }
    }
    return true;
}

// TERCEIRA QUESTÃO
function NumerosRepetidos(){
    $numeros = [];
    for($i = 0; $i < 20; $i++){
        $numeros[] = rand(1, 10);
    }

    $totalNumeros = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    foreach($numeros as $num){
        $totalNumeros[$num - 1]++;
    }

    echo 'Os números que não se repetem são: ';
    foreach($totalNumeros as $num => $soma){
        if($soma == 1)
            echo " " . ($num + 1);
    }
}

// QUARTA QUESTÃO
function SequenciaCrescente($array){
    for($i = 0; $i < count($array); $i++){
        $arrayTemp = $array;
        unset($arrayTemp[$i]);
        $arrayTemp = array_values($arrayTemp);
        if(VerificaSequenciaCrescente($arrayTemp)){
            return "true";
        }
    }
    return "false";
}

// FUNÇÃO AUXILIAR PARA QUESTÃO 4
function VerificaSequenciaCrescente($array){
    for($i = 0; $i < count($array); $i++){
        for($j = $i + 1; $j < count($array); $j++){
            if($array[$i] >= $array[$j]){
                return false;
            }
        }
    }
    return true;
}

