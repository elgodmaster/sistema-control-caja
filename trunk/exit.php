<?php
    require_once 'includes/init.php';
    require_once 'includes/ac.php';
    
    $con = Propel::getConnection(PersonaPeer::DATABASE_NAME);
    Log::registraLog($persona_sesion->getIdpersona(),'Logout','Salida del sistema '.$persona_sesion->getIdpersona().': '.$persona_sesion->getNombre().' '.$persona_sesion->getApellido(),'L',$con);
    header("location: login.php");
?>