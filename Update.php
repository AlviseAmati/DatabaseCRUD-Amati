<html>
<head> </head>
<body
<form class='form-inline' action='' method='get'>
    <div class='form-group'>
        <label for='Nome'>Nome:</label>
        <input type='text' class='form-control' id='nome' value='<?php echo $_GET['nome']; ?>' placeholder='Inserisci il nome' name='nome'>
    </div>
    <div class='form-group'>
        <label for='Cognome'>Cognome:</label>
        <input type='text' class='form-control' id='cognome' value='<?php echo $_GET['cognome'];  ?>' placeholder='Inserisci il cognome'  name='cognome'>
    </div>
    <div class='form-group'>
        <label for='email'>Email:</label>
        <input type='email' class='form-control' id='email' value='<?php echo $_GET['email'];  ?>'  placeholder='Inserisci il email' name='email'>
    </div>
    <input type='submit' value='Modifica' name="Modifica">
</form>
<?php
if(isset($_GET['modifica']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scuolalavoro";
$id = $_GET['righe'];
$nome = $_GET['nome'];
$cognome = $_GET['cognome'];
$email = $_GET['email'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "UPDATE databaseamatidelucca SET nome='1', cognome='$cognome', email='$email' WHERE id='$id'";
mysqli_query($conn, $sql);
include 'primo_database_delucca_amati.php';
}




