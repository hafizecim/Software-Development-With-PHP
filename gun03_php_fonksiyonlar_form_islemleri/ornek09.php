<?php

/*
global key word kullanımı
globalde tanımlı değişkenlere erişim için kullanılan keyword
    */

$a = 10; // Global değişken

function degerOku() {
    global $a; // Global değişkeni kullanmak için global anahtar kelimesi ile erişiyoruz
    echo $a;
    $a++;
}

degerOku(); // Çıktı: 10
echo "<br>";
echo $a; //11
?>