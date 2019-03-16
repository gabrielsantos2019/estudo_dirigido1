<?php

print "temperatura em °C";
$tempC = (float) fgets(STDIN);

$tempF= 9*$tempC/5+32;

print "$tempC em Fahrenheit é: $tempF ";
