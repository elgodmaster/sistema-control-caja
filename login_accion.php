<?php
include 'includes\init.php';
session_start();
try {
    $persona = PersonaQuery::create()
            ->where('Persona.Email = ?',$_REQUEST['correo'])
            ->where('Persona.Clave = ?',md5($_REQUEST['clave']))
            ->findOne();
    if($persona) {
        $con = Propel::getConnection(PersonaPeer::DATABASE_NAME);
        Log::registraLog($persona->getIdpersona(),'Login','Ingreso al sistema '.$persona->getIdpersona().': '.$persona->getNombre().' '.$persona->getApellido(),'L',$con);
        $_SESSION['persona_sesion'] = $persona;
        $_SESSION['persona_sesion_id'] = $persona->getIdpersona();
        header('location: seleccion_acceso.php');
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