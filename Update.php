<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scuolalavoro";
$nome = $_GET['nome'];
$cognome = $_GET['cognome'];
$email = $_GET['email'];
echo "
    <div class='form-group'>
        <label for='Nome'>Nome:</label>
        <input type='text' class='form-control' id='nome' value=$nome placeholder='Inserisci il nome' name='nome'>
    </div>
    <div class='form-group'>
        <label for='Cognome'>Cognome:</label>
        <input type='text' class='form-control' id='cognome' value=$cognome  placeholder='Inserisci il cognome'  name='cognome'>
    </div>
    <div class='form-group'>
        <label for='email'>Email:</label>
        <input type='emai' class='form-control' id='email' value=$email  placeholder='Inserisci il email' name='email'>
    </div>
    ";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "UPDATE databaseamatidelucca SET lastname='Doe' WHERE id=2";
include 'primo_database_delucca_amati.php';