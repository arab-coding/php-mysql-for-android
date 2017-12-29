
<?php
require_once '../includes/DbOperations.php';
$respnse = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
	if (isset ($_POST['username']) and
	isset ($_POST['email']) and
	isset ($_POST['password'] ))
{
	$db = new dbOperations();
	if ($db->createUser ($_POST['username'],$_POST['password'],$_POST['email'])){
	$response['error'] = false;
	$response['message'] = "User registered successfully";
}
}else{
	$response['error'] = true;
	$response['message'] = "Some error occurred ";
}

}else{
	$response ['error'] = true;
	$response ['message'] = "Required fields are missing";
}
echo json_encode($response);

 ?>
