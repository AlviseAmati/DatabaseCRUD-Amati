<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" typer = "text/css" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/Cerca.js"></script>
    <style>
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<h3 align="center">Tabella SQL Amati-Delucca</h3>
<div class="container">
    <form action='Aggiungi.php' method='get'> <button class="button"  data-toggle="tooltip" data-placement="top" title="Clicca per aggiungere un record"> <span class="glyphicon glyphicon-plus"></span> Aggiungi </button> </form>
    <table class="table table-hover" id="tabella">
    <thead>
        <tr>
            <form action="OrdinamentoeMostra.php" method="get">
                <th>ID</th>
                <input type="button" name="id_crescente" value="cr">
                <input type="button" name="id_decrescente" value="dc">
            </form>

            <form action="OrdinamentoeMostra.php" method="get">
                <th>Nome</th>
                <input type="button" name="nome_crescente" value="cr">
                <input type="button" name="nome_decrescente" value="dc">
            </form>

            <form action="OrdinamentoeMostra.php" method="get">
                <th>Cognome</th>
                <input type="button" name="cognome_crescente" value="cr">
                <input type="button" name="cognome_decrescente" value="dc">
            </form>

            <form action="OrdinamentoeMostra.php" method="get">
                <th>Email</th>
                <input type="button" name="email_crescente" value="cr">
                <input type="button" name="email_decrescente" value="dc">
            </form>
        </tr>
        </thead>
</div>

<?php

?>
    <br>
    <br>
<input type="search"  onkeyup="Cerca(document.getElementById('mySearch'),document.getElementsByTagName('td'));" id="mySearch" placeholder="Cerca...">

</div>
</body>
</html>