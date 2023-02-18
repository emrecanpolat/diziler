<?php

//                                    Karıştırıcı
echo "<pre>";
$sayilar = range(1,5);

shuffle($sayilar);
print_r($sayilar);



//                                    2 dizinin elamanlarını birbirine atıyor
$meyve = ["elma","armut","muz"];
$harfler = ["a","b","c"];



$dizi = array_combine($meyve,$harfler);

print_r($dizi);

//                                    Dizi içerisinde hangi eleman kaç adet var sayıyor

$meyve2 = ["elma","elma","elma", "armut", "muz", "elma", "armut", "muz", "armut", "muz","leman"];


$dizi2 = array_count_values($meyve2);


print_r($dizi2);


//                                    Dizi içinde o key var mı diye bakar
$bilgisayar = ["mac","msi","asus","casper"];
$listen = array_key_exists(3,$bilgisayar);


if ($listen == true){
    echo "Yes";
}
else{
    echo "No";
}

    
//                                    Dizi içinde o key var mı diye bakar

//1. Kullanım Şekli
$numbers = range(1,10);

$dizinumbers = array_map(function($e){
    return $e - 26;
},$numbers);

print_r($dizinumbers);

//2. Kullanım Şekli
$numbers2 = range(1,10);

function cube($sayi){
    return $sayi*$sayi*$sayi;
}

$dizinumbers2 = array_map("cube",$numbers2);

print_r($dizinumbers2);


//                                    Filtreleme

$filternumbers = range(1,10);

$cift = array_filter($filternumbers,function($e){
    return $e % 2 == 0 ? $e : false;
});

print_r($cift);



//                                    Dizileri art arta ekler

$numbersArt = range(1,10);
$numbersArt2 = range(2, 20);

print_r(array_merge($numbersArt,$numbersArt2));


//                                    Dizide rastgele anahtar döndürür

$dizirastgele2 = ["cilek","kivi","ananas","avakado","mango"];

print_r(array_rand($dizirastgele2,2));



//                                    Diziyi ters çevirir



$dizireverse = ["cilek", "kivi", "ananas", "avakado", "mango"];

print_r(array_reverse($dizireverse));











?>