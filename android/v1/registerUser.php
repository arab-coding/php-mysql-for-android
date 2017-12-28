
<?php
require_once '../includes/DbOperations.php';
$respnse = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
	isset ($_POST['username'] and
	isset ($_POST['email'] and
	isset ($_POST['password'] ))

	$db = new dbOperations();
	$result = $db->createUser
	($_POST['username'],$_POST['password'],$_POST['email']);
	if ($result == true ){
		$response ['error'] = false;
		$response ['message'] = "User registered successfully";

	}elseif ($result == false){
		$response ['error'] = true;
		$response ['message'] = "Some error occurred
	}
)
}else {
	$response ['error'] = true;
	$response ['message'] = "Required fields are missing";
}
echo json_encode($response);

 ?>
