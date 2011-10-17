<?php
    session_start();
    if(!isset($_SESSION['persona_sesion']))
        header("location: login.php");
    else {
        $qry = new PersonaQuery();
        $persona_sesion = $qry->findPk($_SESSION['persona_sesion_id']);
    }
?>