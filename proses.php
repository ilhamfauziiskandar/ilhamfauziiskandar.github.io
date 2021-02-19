<?php
$nama  = $_POST['nama'];
$email  = $_POST['email'];
$tgl  = $_POST['tgl'];
$isi  = $_POST['isi'];

$file = file_get_contents('json/pesan.json');

$data = json_decode($file, true);
$data["records"] = array_values($data["records"]);

array_push($data["records"], $_POST);
file_put_contents("json/pesan.json", json_encode($data));
unset($_POST);


header("Location: index.php");
