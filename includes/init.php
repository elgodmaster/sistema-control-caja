<?php
// Include the main Propel script
require_once 'vendor/propel/runtime/lib/Propel.php';
//require_once 'build/classes/ca2011/activeMailLib.php';
//require_once 'build/classes/ca2011/correo.php';

// Initialize Propel with the runtime configuration
Propel::init("build/conf/scc-conf.php");

// Add the generated 'classes' directory to the include path
set_include_path("build/classes" . PATH_SEPARATOR . get_include_path());
?>