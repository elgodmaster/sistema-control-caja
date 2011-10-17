<?php
require("../codebase/connector/grid_connector.php");
$res=mysql_connect("localhost","root","070107cadj");
mysql_select_db("dhtmlx_tutorial");
 
$gridConn = new GridConnector($res,"MySQL");
$gridConn->render_table("contacts","contact_id","fname,lname,email");
?>