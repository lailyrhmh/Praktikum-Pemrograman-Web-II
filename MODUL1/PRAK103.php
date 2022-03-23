<?php

    $suhuC = 37.841;

    $suhuF = (9/5)*$suhuC + 32;
    $suhuR = (4/5)*$suhuC;
    $suhuK = $suhuC + 273;

    echo "Fahrenheit (F) = ".number_format($suhuF,4)."<br>";
    echo "Reamur (R) = ".number_format($suhuR,4)."<br>";
    echo "Kelvin (K) = ".number_format($suhuK,4);