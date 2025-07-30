<?php 
#if eğer
// Bir koşul doğruysa (true) belirli bir kod bloğunu çalıştırır. 
//if(true) durumuna göre if bloğunu çalıştırır

$yas = 10;

if ($yas >= 18){

    echo" Ehliyet Alabilirsiniz";
}
// tek satırlık if yazımı
if($yas <=18 ) echo "ehliyet alamazsınız";

echo"<hr>";

echo($yas >= 18) ? "Ehliyet Alabilirsiniz" : "Ehliyet Alamazsınız";
// Ternary operatör kullanımı
// ? işareti ile başlar, : işareti ile biter.

echo"<hr>";

$puan = 50;
echo($puan >= 50) ? "Geçti": "Kaldı"; // Ternary operatör ile puan kontrolü
// Eğer puan 50 veya daha yüksekse "Geçti", aksi halde "Kaldı" yazdırır.
// Ternary operatör, kısa if-else yapısıdır.

echo"<hr>";

$ad = $_GET["ad"] ?? "Misafir"; // Null coalescing operator kullanımı
// Eğer "ad" parametresi varsa, onu alır; yoksa "Misafir" olarak atar.
echo "Hoşgeldiniz, $ad"; // Kullanıcı adını ekrana yazdırır
// Null coalescing operator, PHP 7.0 ile gelen bir özelliktir
//Eğer "ad" parametresi yoksa, "Misafir" olarak varsayılan bir değer kullanılır.
// Bu, kullanıcı adını dinamik olarak almayı sağlar.
// Eğer $_GET["ad"] değişkeni tanımlı değilse veya boşsa, "Misafir" değeri kullanılır.


?>



