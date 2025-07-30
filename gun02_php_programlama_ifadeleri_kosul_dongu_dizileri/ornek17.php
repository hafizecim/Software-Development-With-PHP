<?php
// continue: O turu atlar, döngü devam eder.

for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) continue;
    echo "$i ";
}

echo "<hr>";

$renkler = array("Kırmızı", "Pembe", "Yeşil", "Mavi");

foreach ($renkler as $renk) {
    if ($renk == "Yeşil") continue;
    echo "Renk: $renk <br>";
}  


?>