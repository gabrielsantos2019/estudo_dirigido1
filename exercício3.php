<?php
    //aumento de salário

    print("Quanto voce ganha de salário?: ");
    $salario = (INT) fgets(STDIN);

    $newsalario= $salario * 1.10;

    print("Seu novo salário foi aumentado em 10% e ficou: $newsalario\n");
