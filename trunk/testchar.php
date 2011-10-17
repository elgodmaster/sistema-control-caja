<?php
require_once 'includes/init.php';
header("Content-type: text/xml");
$persona = PersonaQuery::create()->findPk(0);
echo $persona->generaArbolOpciones();
?>