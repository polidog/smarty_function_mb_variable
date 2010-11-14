<?php
/*
* Smarty plugin
* -------------------------------------------------------------
* File:     function.mb_variable.php
* Type:     function
* Name:     mb_variable
* Purpose:  日本語indexの配列データを取得する
* -------------------------------------------------------------
*/
function smarty_function_mb_variable($params,& $smarty)
{
	$var = isset($params['var']) ? $params['var'] : null;
	if ( $var === null || $var === '') {
		return null;
	}

	$vArray = explode('.', $var);
	$object = $smarty->getVariable(array_shift($vArray));
	if ( count($vArray) < 1 ) {
		return $object->value;
	}
	$array = $object->value;
	
	foreach( $vArray as $value ) {
		
		if ( !isset($array[$value]) ) {
			return null;
		}
		
		$array = $array[$value];
		
		if ( !is_array($array[$value]) ) {
			break;
		}
		
	}
	return $array;
}
?>
