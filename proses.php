<?php

$pesan = array(
    'nama' => $_POST['nama'],
    'email' => $_POST['email'],
    'tgl' => date("d-M-Y"),
    'isi' => $_POST['isi'],
);

$file = file_get_contents('json/pesan.json');

$data = json_decode($file, true);

$data["records"] = array_values($data["records"]);

array_push($data["records"], $pesan);

file_put_contents("json/pesan.json", json_encode($data));

header("Location: index.html");
