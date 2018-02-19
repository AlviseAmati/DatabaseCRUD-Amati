<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scuolalavoro";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_GET['nome'])&&isset($_GET['cognome'])&&isset($_GET['email']))
{
    $id = $_GET['id'];
    $sql = "DELETE FROM  databaseamatidelucca where id=$id";
    mysqli_query($conn, $sql);
    echo "<form action='primo_database_delucca_amati.html' method='post'>";
}