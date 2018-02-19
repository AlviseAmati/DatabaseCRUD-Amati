<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scuolalavoro";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$id = $_GET['righe'];
$sql = "DELETE FROM databaseamatidelucca WHERE id=$id";
mysqli_query($conn, $sql);
echo "<form action='primo_database_delucca_amati.html' method='post'>";
