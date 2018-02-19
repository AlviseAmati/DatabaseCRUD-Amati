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

$sql = "SELECT * FROM databaseamatidelucca";
$result = mysqli_query($conn, $sql);
echo "<table class='table table-hoover'>";
echo "<thead>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>Nome</th>";
echo "<th>Cognome</th>";
echo "<th>Email</th>";
echo"
     <form action='Insert.php' method='get'> 
     <input type='submit' value='insert'> </form>
     ";
echo "</tr>";
echo "</thead>";

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        $nome = $row['nome'];
        $cognome = $row['cognome'];
        $email = $row['email'];
        echo " <div class='container'> ";
        echo "<tbody>";
        echo "<tr>";
        echo " <td>".$id."</td>";
        echo " <td>".$nome."</td>";
        echo " <td>".$cognome."</td>";
        echo " <td>".$email."</td>";
        echo
          "<td > 
            <form action='Delete.php' method='get'> 
            <input type='hidden' value='$nome' name='nome'>
            <input type='hidden' value='$cognome' name='cognome'>
            <input type='hidden' value='$email' name='email'>
            <input type='submit' value='delete'> </form>
           </td>";
        echo
          "<td> 
            <form action='Update.php' method='get'> 
            <input type='hidden' value='$id' name='righe'>
            <input type='submit' value='update'> </form>
           </td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</div>";
    }
    echo "</table>";
}

if(isset($_GET['DELETE']))
{
    if ($conn->query($sql) === TRUE)
        echo "<form action='Delete.php' method='GET'>";
    else
        echo "Error deleting record: " . $conn->error;
}

if(isset($_GET['UPDATE']))
{
    if ($conn->query($sql) === TRUE)
        echo "<form action='Update.php' method='GET'>";
    else
        echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>