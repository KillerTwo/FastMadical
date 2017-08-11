<?php
	header("Content-type: text/html; charset=utf-8"); 
	$_GET['city'];
	$arrTojson = array();
	for($i = 0;$i<12;$i++){
		$arrTojson[$i] = 'Union Hospital'.$i;
	}
	$arr['msg'] = $arrTojson;
	echo json_encode($arr);
?>