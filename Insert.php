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
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scuolalavoro";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_GET['nome'])&&isset($_GET['cognome'])&&isset($_GET['email']))
{
    $nome = $_GET['nome'];
    $cognome = $_GET['cognome'];
    $email = $_GET['email'];
    $sql = "INSERT INTO databaseamatidelucca (nome, cognome, email) VALUES ('$nome', '$cognome', '$email')";
    mysqli_query($conn, $sql);
    include 'primo_database_delucca_amati.php';
}