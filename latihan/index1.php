<?php

//persiapan curl
$val = curl_init();

//set curl
curl_setopt($val, CURLOPT_URL, "https://github.com/");

//return the transfer as a string
curl_setopt($val, CURLOPT_RETURNTRANSFER, 1);

//$output contains the output string
$output = curl_exec($val);

//tutup curl
curl_close($val);

//menampilkan hasil curl
echo $output;
