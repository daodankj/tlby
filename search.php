<?php
header("Content-type:text/html;charset=utf-8");
/*$code = $_GET['FwCode'];
$info = file_get_contents('http://www.12365.cm/fwqueryjson.ashx?FwCode='.$code);
//$info = trim($info,'(');
//$info = trim($info,')');
//echo $info;exit;
//echo json_decode($info,true);
if(preg_match("/QueryResult\":\".+?\"/", $info, $matches)){
	$msg = $matches[0];
	$msg = trim($msg,'QueryResult":"');
	$msg = trim($msg,'"');
}else $msg = '查询失败';
$return = [
	'code' => 1,
	'msg' => $msg
];
echo json_encode($return);*/
/*if (strpos($info,'防伪已经被冻结')) {
	$return = [
		'code' => -1,
		'msg' => '您好，您所查询的防伪已经被冻结！'
	];
	echo json_encode($return);
}else{
	echo $info;
}*/
$code = $_GET['FwCode'];
$s = file_get_contents('http://www.12365.cm/fwqueryjson.ashx?FwCode='.$code);
$s = trim($s,'(');
$s = trim($s,')');
$info = json_decode($s,true);
$return = [
	'code' => $info['CodeState'],
	'msg' => $info['QueryResult']
];
echo json_encode($return);