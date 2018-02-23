<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="databaseamatidelucca";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_GET['id_crescente']))
    $sql = "SELECT * FROM registro ORDER BY `Id`";
else if(isset($_GET['id_decrescente']))
    $sql = "SELECT * FROM registro ORDER BY `Id` DESC";
else if(isset($_GET['nome_crescente']))
    $sql = "SELECT * FROM registro ORDER BY `nome`";
else if(isset($_GET['nome_decrescente']))
    $sql = "SELECT * FROM registro ORDER BY `nome` DESC";
else if(isset($_GET['cognome_crescente']))
    $sql = "SELECT * FROM registro ORDER BY `cognome`";
else if(isset($_GET['cognome_decrescente']))
    $sql = "SELECT * FROM registro ORDER BY `cognome` DESC";
else if(isset($_GET['email_crescente']))
    $sql = "SELECT * FROM registro ORDER BY `email`";
else if(isset($_GET['email_decrescente']))
    $sql = "SELECT * FROM registro ORDER BY `email` DESC";

else
    $sql = "SELECT * FROM registro";


$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['Id']."</td>";
    echo "<td>".$row['Nome']."</td>";
    echo "<td>".$row['Cognome']."</td>";
    echo "<td>".$row['Email']."</td>";
    $riga = $row['Id'];
    echo "<td><form action='Update.php' method='get'><button type=\"submit\" class=\"btn btn-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Clicca per aggiornare questa riga\"><input type='hidden' name='identificator' value='$riga'>Update</button></form></td>";
    echo "<td><form action='Delete.php' method='get'><button type=\"submit\" class=\"btn btn-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Clicca per eliminare questa riga\"><input type='hidden' name='identificator' value='$riga'>Delete</button></form></td>";
    echo "</tr>";
}
echo "</table>";
echo"</div>";

$conn->close();