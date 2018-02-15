<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//////      INSERT
$sql = "INSERT INTO DatabaseCRUD-Amati-Delucca (nome, cognome, email, numero di telefono, indirizzo, città, CAP, Codice Fiscale)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
///////
///         DELETE
$sql = "DELETE FROM DatabaseCRUD-Amati-Delucca WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
///         UPDATE
 $sql = "UPDATE DatabaseCRUD-Amati-Delucca SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
///
$conn->close();