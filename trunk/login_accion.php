<?php
include 'includes\init.php';
session_start();
try {
    $persona = PersonaQuery::create()
            ->where('Persona.Email = ?',$_REQUEST['correo'])
            ->where('Persona.Clave = ?',md5($_REQUEST['clave']))
            ->findOne();
    if($persona) {
        $_SESSION['persona_sesion'] = $persona;
        $_SESSION['persona_sesion_id'] = $persona->getIdpersona();
        header('location: mapp.php');
    }
    else {
        $_SESSION['error'] = 'DI';
        header('location: login.php');
    }
}
catch(Exception $e) {
    $_SESSION['error'] = 'BD';
    Log::generaLog2File($e);
    header('location: login.php');
}
?>