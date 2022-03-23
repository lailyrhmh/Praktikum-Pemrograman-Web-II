<?php

    $jariJari = 4.2;
    $tinggi = 5.4;
    $PHI = 3.14;

    $volume = 1/3*$PHI*$jariJari*$jariJari*$tinggi;

    echo "Volume kerucut dengan jari-jari $jariJari m dan tinggi $tinggi m adalah ".number_format($volume,3)." m3";