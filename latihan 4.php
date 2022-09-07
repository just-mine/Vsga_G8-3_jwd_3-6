<?php



$data [] = array(
    'no'        => 1,
    'nama'      => 'yusran',
    'alamat'    => 'aceh'
);


$data [] = array(
    'no'        => 2,
    'nama'      => 'malik',
    'alamat'    => 'medan'
);

$jsonfile =  json_encode($data, JSON_PRETTY_PRINT);

file_put_contents('anggota.json', $jsonfile);