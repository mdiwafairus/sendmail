<?php
include '../config.php';
	
if(isset($_POST['register'])){

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

	$value = 32;
	$keyspace = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$str = '';
	$max = mb_strlen($keyspace, '8bit') - 1;
	for ($i = 0; $i < $value; ++$i) {
		$str .= $keyspace[random_int(0, $max)];
	}

    $token = $str;

    $sql = "INSERT INTO user (name, email, token, password ) VALUES (:name, :email, :token, :password)";
    $stmt = $connect->prepare($sql);

    $params = array(
        ":name" => $name,
        ":email" => $email,
        ":password" => $password,
        ":token" => $token
    );

    $saved = $stmt->execute($params);

    if($saved) {
        $_SESSION['Message'] = "Email has been sent!";
		header("Location:../index.php");
    }
}

?>