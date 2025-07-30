<!-- php veri tipleri -->
<!-- php sabit constans
iki farklı şekilde sabit tanımlanmaktadır
define ve const ile
define her yerde sabit tanımlama kullanılırken 
const bloklar dışında sabit tanımlarken kullanılır
daha sonra değeri değişmeyecek tanımlamalarda kullanılırlar

-->

<?php

define("zam_orani",1.5);

echo zam_orani;

//zam_orani = 2.5; // sabitler tanımlandıktan sonra değiştirilemez. Hata verir.

const kurum = "Tech Istanbul"; // const ile sabit tanımlarken blok dışında tanımlanır
echo kurum;

if (true){
define ("kurulus",    "techistanbul");
}

echo kurulus;


if (true){
// const ("kurulus2",    "techistanbul"); // const ile sabit tanımlarken blok dışında tanımlanır. hata verir
define ("kurulus2",    "techistanbul2");
}

echo kurulus2;

const atolye = "Php Atolyesi";
echo atolye;
/*
if (true){
    const("ders","php Dersi");
}
    */

?>