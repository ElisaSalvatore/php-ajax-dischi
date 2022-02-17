<?php
    //Importiamo dati del database 
    include "../database/dischiDb.php";

    // e specifichiamo che si tratta di un JSON
    header("Content-Type: application/json");

    echo json_encode($dischi);
?>
