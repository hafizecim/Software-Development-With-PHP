<?php

/*
Php'de hazır fonksiyonlar
string methodlar
    */

echo strlen("PHP Programlama"); echo "<br>";// Çıktı: 15 string karakter sayısını verir 
echo str_word_count("PHP Programlama"); echo "<br>"; // Çıktı: 2 string kelime sayısını verir
echo strpos("PHP Programlama", "Programlama"); echo "<br>"; // Çıktı: 4 // "Programlama" kelimesinin başlangıç indexini verir
echo str_replace("PHP", "Python", "PHP Programlama"); echo "<br>";// Çıktı: Python Programlama // "PHP" kelimesini "Python" ile değiştirir
echo trim("   PHP Programlama   "); echo "<br>";// Çıktı: PHP Programlama // Başındaki ve sonundaki boşlukları temizler
echo str_repeat("PHP ", 3); echo "<br>";// Çıktı: PHP PHP PHP // "PHP" kelimesini 3 kez tekrarlar
echo strrev("PHP Programlama"); echo "<br>";// Çıktı: ammalP PHP // "PHP Programlama" kelimesini ters çevirir
echo str_pad("PHP", 10, "-=", STR_PAD_BOTH); echo "<br>";// Çıtdı: -=PHP=-=- // "PHP" kelimesini 10 karakter uzunluğuna getirir, eksik kısımları "-=" ile doldurur
echo strtoupper("php"); echo "<br>";// Çıktı: PHP string karakterleri büyük harfe çevirir
echo strtolower("PHP"); echo "<br>";// Çıktı: php string karakterleri küçük harfe çevirir
echo substr("Selam Dünya", 6); // Çıktı: Dünya altküme stringi oluşturur belirlenen karakter indexinden sonrası için

?>