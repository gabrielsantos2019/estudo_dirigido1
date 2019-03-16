<?php

print "distãncia a percorrer";
$d = (float) fgets(STDIN);

print "velocidade média";
$vm = (float) fgets(STDIN);

$tempo= $d/$vm;

print "tempo de viagem: $tempo";
