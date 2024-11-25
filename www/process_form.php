<?php

if($_SERVER["REQUEST_METHOD"] !== "POST"){
    echo "Je hebt de verkeerde request method gebruikt";
    exit;
}

if( !   isset($_POST["voornaam"])     ){
    echo "De sleutel voornaam bestaat niet. foutje";
    exit;
}


if(    empty($_POST["voornaam"])   ){
    echo "Het veld voornaam is verplicht!!";
    exit;
}


$voornaam = $_POST["voornaam"];
$tussenvoegsel = $_POST["tussenvoegsel"];
$achternaam = $_POST["achternaam"];
$straat = $_POST["straat"];
$huisnummer = $_POST["huisnummer"];
$postcode = $_POST["postcode"];
$plaats = $_POST["plaats"];
$land = $_POST["land"];

$kleur = $_POST["kleur"];
$thema = $_POST["thema"];


require 'database.php';


//sla ook de kleur en het thema op in de database


$sql = "INSERT INTO users (firstname, infix, lastname, street, housenumber, zipcode, city, country, color, theme ) 
            VALUES ('$voornaam', '$tussenvoegsel', '$achternaam', '$straat', '$huisnummer', '$postcode', '$plaats', '$land', '$kleur', '$thema')";

mysqli_query($conn, $sql);

