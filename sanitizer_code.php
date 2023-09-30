<?
function validMySQL($var) {
	
	$var=stripslashes($var);
	$var=htmlentities($var);
	$var=strip_tags($var);
	$var=trim($var);
	return $var;
}
?>