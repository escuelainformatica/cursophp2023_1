<?php

use eftec\bladeone\BladeOne;

include 'ActorDB.php';
include 'ActorView.php';
include 'Blade.php';
$actores=leerActores();

$blade=new BladeOne();
echo $blade->run('hola',['actores'=>$actores]);


//mostrarActores($actores);