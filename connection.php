<?php   
$db_name = 'mysql:host=localhost;dbname=shop_db';
$db_user = 'root';
$db_passeword = '';

$conn = new PDO($db_name,$db_user,$db_passeword)
if($conn){
	echo "connected";
}
function unique_id(){
	$chars = '0123456789abcdefjklmnopqrstuvwxyzABCDEFGHIKLMNOPQRSTUVWXYZ';
	$charLength = strlen($chars);
	$randomString = '';
	for ($i=0; $i< 20 ; $i++) {
		$randomString.= $chars[mt_rand(0, $charLength -1)];
	}
	return $randomString;
}

?>