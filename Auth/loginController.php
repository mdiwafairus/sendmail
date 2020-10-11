<?php 
require_once("../config.php");

if(isset($_POST['login'])){

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM user WHERE name=:name OR email=:email";
    $stmt = $connect->prepare($sql);
    
    $params = array(
        ":name" => $email,
        ":email" => $email
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user){
        if(password_verify($password, $user['password'])){
            session_start();
            $_SESSION["user"] = $user;
			$_SESSION['status'] = "login";
            header("Location:../home.php");
        }else {
        	$_SESSION['Message'] = "Check Email dan Password!";
            header("Location:../index.php");
        }

    }
}
?>