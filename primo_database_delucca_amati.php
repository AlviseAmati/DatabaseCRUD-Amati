<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scuolalavoro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET['SELECT']))
{
    $sql = "SELECT * FROM databaseamatidelucca";
    $result = mysqli_query($conn, $sql);
    echo "<table class='table table-hoover'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>Nome</th>";
    echo "<th>Email</th>";
    echo "<th>Telefono</th>";
    echo "<th>Indirizzo</th>";
    echo "<th>Città</th>";
    echo "<th>CUP</th>";
    echo "<th>Codice Fiscale</th>";
    echo "</tr>";
    echo "</thead>";
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result))
        {
            $nome = $row['nome'];
            $cognome = $row['cognome'];
            $numerotelefono = $row['numerotelefono'];
            $citta = $row['citta'];
            $CAP = $row['CAP'];
            $CodiceFiscale = $row['CodiceFiscale'];
            $id = $row['id'];
            echo " <div class='container'> ";
            echo "<tbody>";
            echo "<tr>";
            echo " <td>".$nome."</td>";
            echo " <td>".$cognome."</td>";
            echo " <td>".$numerotelefono."</td>";
            echo " <td>".$citta."</td>";
            echo " <td>".$CAP."</td>";
            echo " <td>".$CodiceFiscale."</td>";
            echo
              "<td > 
                <form action='Delete.php' method='get'> 
                <input type='hidden' value=$id>
                <input type='submit' value='delete'> </form>
               </td>";
            echo
              "<td> 
                <form action='Update.php' method='get'> 
                <input type='hidden' value=$id>
                <input type='submit' value='update'> </form>
               </td>";
            echo "</tr>";
            echo "</tbody>";
            echo "</div>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

}
if(isset($_GET['INSERT']))
{
    echo "<form action='Insert.php' method='GET'>";
}

if(isset($_GET['DELETE']))
{
    $sql = "DELETE FROM databaseamatidelucca WHERE id=3";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

if(isset($_GET['UPDATE']))
{
    $sql = "UPDATE databaseamatidelucca SET lastname='Doe' WHERE id=2";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>