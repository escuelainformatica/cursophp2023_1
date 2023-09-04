<?php
function leerActores()
{
    $resultado=[];
    $dsn = "mysql:host=localhost;dbname=sakila";
    $dbh = new PDO($dsn, "root", "abc.123");
    $stmt = $dbh->prepare("SELECT * FROM actor");
    // Especificamos el fetch mode antes de llamar a fetch()
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // Ejecutamos
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        $resultado[]=$row;
    }
    return $resultado;
}
