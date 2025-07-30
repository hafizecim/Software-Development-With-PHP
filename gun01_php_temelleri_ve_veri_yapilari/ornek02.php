<!-- Temel Yazdırma Komutları -->

<?php
// 1. echo ve print komutları
echo "Merhaba, Dünya";
echo "<br>"; // HTML'de yeni satır eklemek için <br> kullanılır
echo "Birinci", " İkinci", " Üçüncü"; 

// 2. print komutu
print("<br> bu print ile yazılmıştır <br> "); 

// 3. print_r ve var_dump fonksiyonları
// print_r, dizileri ve nesneleri okunabilir bir formatta yazdırır
$dizi = ["elma", "armut", "muz"];
print_r($dizi); // Diziyi yazdırır

echo "<br>";
// 4. var_dump fonksiyonu
// var_dump, değişkenin türünü ve değerini ayrıntılı olarak gösterir
var_dump($dizi); // Dizinin yapısını ve içeriğini ayrıntılı olarak yazdırır
?>