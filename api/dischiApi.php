<?php
    //Importiamo dati del database e specifichiamo che si tratta di un JSON
    include "../database//dischiDb.php";

    header("Content-Type: application/json");

    echo json_encode($dischi);
?>
