<?php
require_once("../config.php");
require_once("../Auth/authController.php");

$myArray = [];
if ($stmt = $connect->query("SELECT * FROM list_email")) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

?>