<?php

    require_once "modelo/claseAuto.php";

    #Instanciar clase auto
    $Auto = new claseAuto();
    $Auto -> setMarca('Ford');
    $Auto -> setModelo('Fiesta');
    $Auto -> setVersion('SE');
    $Auto -> setAnio(2018);
    $Auto -> MostrarDatos();
?>