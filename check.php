<?php 
echo "\e[32m1.LIQ";
echo "\n2.BOP";
echo "\n3.COPE";
echo "\n4.ROPE";
echo "\n5.APEX\e[39m";
echo "\n\e[33mPilih wallet yang ingin di check :\e[39m";
$pilihan = trim(fgets(STDIN));
if ($pilihan == "1"){
    echo "Silahkan Tunggu";
    echo "\n";
    sleep(1);
     require "src/liq.php";
}
if ($pilihan == "2"){
    echo "Silahkan Tunggu";
    echo "\n";
    sleep(1);
     require "src/bop.php";
}
if ($pilihan == "3"){
    echo "Silahkan Tunggu";
    echo "\n";
    sleep(1);
     require "src/cope.php";
}
if ($pilihan == "4"){
    echo "Silahkan Tunggu";
    echo "\n";
    sleep(1);
     require "src/rope.php";
}
if ($pilihan == "5"){
    echo "Silahkan Tunggu";
    echo "\n";
    sleep(1);
     require "src/apex.php";
}
?>
