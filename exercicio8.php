<?php

print "quantidade de cigarros fumados por dias";
$cigarros = (int) fgets(STDIN);

print "quantidade de anos que fumou";
$anos = (int) fgets(STDIN);


$mperdidos= ($cigarros+($anos*365))*10;
$dperdidos= $mperdidos/1440;


print "/nA quantidade de minutos perdidos é: $mperdidos minutos/nA quantidade de dias perdidos é: $dperdidos dias";
