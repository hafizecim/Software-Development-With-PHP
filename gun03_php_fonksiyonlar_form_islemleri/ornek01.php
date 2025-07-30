<?php

/*
function fonksiyonAdi($parametre1, $parametre2, ...) {
    // Yapılacak işlemler
    return $sonuc; // Opsiyonel
}
    */

function selamla(){
    echo"PHP Atölyesine Hoşgeldiniz";
}

    function merhabaDe() {
    echo "Merhaba Dünya!";
    echo "<br>";
   // selamla(); //bir fonksiyon başka fonksiyon içinde çağrılabilir
     echo "<br>";
    
}


    function merhabaDe2() {
    echo "Merhaba Dünya!";
    echo "<br>";
    selamla(); //bir fonksiyon başka fonksiyon içinde çağrılabilir
     echo "<br>";
    
}

merhabaDe(); // Çıktı: Merhaba Dünya!

echo "<hr>";

selamla();

echo "<hr>";

merhabaDe2(); // Çıktı: Merhaba Dünya! ve PHP Atölyesine Hoşgeldiniz



?>