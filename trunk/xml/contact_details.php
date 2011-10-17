<?php
require("../codebase/connector/form_connector.php");
$res=mysql_connect("localhost","root","070107cadj");
mysql_select_db("dhtmlx_tutorial");
 
$formConn = new FormConnector($res);
$formConn->render_table("contacts","contact_id","fname,lname,phone_1,phone_2,email,homepage,skype");
?>