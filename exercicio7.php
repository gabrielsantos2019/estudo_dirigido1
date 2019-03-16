<?php

print "Quantidade de Km";
$Km = (float) fgrts (STDIN);


print "quantos dias de aluguel";
$diasalugado = (float) fgrts (STDIN);


$alugueld= $diasalugado*60;
aluguelkm= $km*0.15;
$total= $alugueld + $aluguelkm;

print "preço total a pagar: $total";
