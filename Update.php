<html>
<form class="form-inline" action="" method="get">
    <div class="form-group">
        <label for="Nome">Nome:</label>
        <input type="text" class="form-control" id="nome" placeholder="Inserisci il nome" name="nome">
    </div>
    <div class="form-group">
        <label for="Cognome">Cognome:</label>
        <input type="text" class="form-control" id="cognome" placeholder="Inserisci il cognome"  name="cognome">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Inserisci il email" name="email">
    </div>
    <input type="submit">
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scuolalavoro";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "UPDATE databaseamatidelucca SET lastname='Doe' WHERE id=2";