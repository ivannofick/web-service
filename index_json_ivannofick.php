<?php
$json_data=file_get_contents("pekerja2.json");
$obj = json_decode($json_data);
echo "Nim : "; echo $obj->nik;
echo "<br>";
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "Alamat : "; echo $obj->kota;
echo "<br>";
echo "No Hp : "; echo $obj->No_hp;
echo "<br>";
echo "Mata kuliah: ";echo $obj->data[0];
echo "<br>";
echo "Mata kuliah: ";echo $obj->data[1];
echo "<br>";
echo "Mata kuliah: ";echo $obj->data[2];
?>