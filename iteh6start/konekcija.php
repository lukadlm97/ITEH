<?php
$adresaHostServera = "localhost";
$korisnickoIme = "root";
$sifra = "";
$imeBaze = "json_baza";
$konekcija = new mysqli($adresaHostServera, $korisnickoIme, $sifra, $imeBaze);
if ($konekcija->connect_errno) {
    printf("Konekcija neuspešna: %s\n", $konekcija->connect_error);
    exit();
} 
$konekcija->set_charset("utf8");
