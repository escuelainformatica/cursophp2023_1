<?php
function mostrarActores($actores) {
?>
<table border=1>
<?php
foreach($actores as $actor) {
    echo "<tr><td>".$actor['first_name'].'</td><td>'.$actor['last_name'].'</td></tr>';
}
?>

</table>

<?php
}