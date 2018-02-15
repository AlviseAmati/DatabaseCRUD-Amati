<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET['SELECT']))
{
    $sql = "SELECT * FROM DatabaseCRUD-Amati-Delucca";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. "   Nome: " . $row["nome"]. "   Cognome " . $row["cognome"]. "  email". $row["email"]. "  Telefono". $row["NumeroDiTelefono"]. "  Indirizzo". $row["indirizzo"]. "  Città". $row["città"]. "  CAP". $row["CAP"]. "  C.Fiscale". $row["CodiceFiscale"]." ";
        }
    } else {
        echo "0 results";
    }
}
if(isset($_GET['INSERT']))
{
    $sql = "INSERT INTO DatabaseCRUD-Amati-Delucca (nome, cognome, email, NumeroDiTelefono, indirizzo, città, CAP, CodiceFiscale)
    VALUES ('John', 'Doe', 'john@example.com')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if(isset($_GET['DELETE']))
{
    $sql = "DELETE FROM DatabaseCRUD-Amati-Delucca WHERE id=3";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

if(isset($_GET['UPDATE']))
{
    $sql = "UPDATE DatabaseCRUD-Amati-Delucca SET lastname='Doe' WHERE id=2";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();