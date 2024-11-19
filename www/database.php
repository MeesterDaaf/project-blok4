<?php

// Database configuratie
$host  = "mariadb";
$dbuser = "root";
$dbpass = "password";
$dbname = "project_blok4";

// Maak een  database connectie
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);