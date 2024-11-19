<?php

$voornaam = $_POST["voornaam"];
$tussenvoegsel = $_POST["tussenvoegsel"];
$achternaam = $_POST["achternaam"];
$straat = $_POST["straat"];
$huisnummer = $_POST["huisnummer"];
$postcode = $_POST["postcode"];
$plaats = $_POST["plaats"];
$land = $_POST["land"];

require 'database.php';


$sql = "INSERT INTO users (firstname, infix, lastname, street, housenumber, zipcode, city, country ) 
            VALUES ('$voornaam', '$tussenvoegsel', '$achternaam', '$straat', '$huisnummer', '$postcode', '$plaats', '$land')";

mysqli_query($conn, $sql);

