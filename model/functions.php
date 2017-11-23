<?php 
$requiredTag = "-require";
$repeatTag = "-repeat-";

function newRegister($post)
{
	global $requiredTag;
	global $repeatTag;
	$nameArray = array_keys($post);
	foreach ($nameArray as $key) {
		#Require Checker
		$required = strpos($key, $requiredTag);
		$reqAndEmpty = $required && empty($post[$key]) ? 1 : 0;
		if($reqAndEmpty)
			return 20;
		#Repeat Checker
		$repeatCheck = strpos($key, $repeatTag) ?  explode($repeatTag, $key)[0] : null;
		$fieldSome = $post[$repeatCheck]!=$post[$key] ? 1 : 0;
		if($fieldSome && $repeatCheck)
			return 21;  
	}
	return 1;
}


?>