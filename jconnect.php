<?php 
$joomla15 = !isset($mosConfig_dbprefix);
if ($joomla15) {
   $CONFIG = new JConfig();  
   $mosConfig_dbprefix = $CONFIG -> dbprefix;
   $mosConfig_host =   $CONFIG -> host;
   $mosConfig_user = $CONFIG -> user; 
   $mosConfig_password = $CONFIG -> password; 
   $mosConfig_db = $CONFIG -> db; 
}

$connection = mysql_connect($mosConfig_host,$mosConfig_user,$mosConfig_password) or die ('Cannot connect to the database: ' . mysql_error());
$db = mysql_select_db($mosConfig_db,$connection) or die ('Cannot select database: ' . mysql_error());


 ?>