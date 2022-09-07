<?php

$file = "anggota.json";

$anggota = file_get_contents($file);

$data = json_decode($anggota, true);

$data [] = array(
    'no'        => 3,
    'nama'      => 'yusran',
    'alamat'    => 'aceh'
);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

$file = file_put_contents($file, $jsonfile);