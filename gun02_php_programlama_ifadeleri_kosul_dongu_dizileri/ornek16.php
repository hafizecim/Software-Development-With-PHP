<?php
// break: Döngüyü tamamen durdurur.

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) break;
    echo "$i ";
}

echo "<hr>";

$renkler = array("Kırmızı", "Pembe","Yeşil", "Mavi");

foreach ($renkler as $renk) {
    if($renk == "Yeşil") break;
    echo "Renk: $renk <br>";
}  


?>