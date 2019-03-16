<?php

    //Segundos totais do usuário

    print("Digite a quantidade de dias: ");
    $d = (INT) fgets(STDIN);
    
    print("Digite a quantidade de horas: ");
    $h = (INT) fgets(STDIN);

    print("Digite a quantidade de minutos: ");
    $m = (INT) fgets(STDIN);

    print("Digite a quantidade de segundos: ");
    $s = (INT) fgets(STDIN);

    $sD = $d *86400;
    $sH = $h *3600;
    $mS = $m *60;

    $totals = $sD + $sH + $mS + $s;

    print("O número total de segundos é: $totals \n");
