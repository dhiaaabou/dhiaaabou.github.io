<?php
	
   $dbHost = 'localhost';
   $dbName = 'dmh2021i_students';
   $dbUser = 'dmh2021i_admin';
   $dbPass = 'DMH2021bcfe!';
$db = new PDO('mysql:host='.$dbHost.';dbname='.$dbName.'; charset=utf8', $dbUser, $dbPass);
	
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
?>