<?php
include("connection.php");

if(isset($_POST['email'], $_POST['password'], $_POST['password2'], $_POST['date'], $_POST['gender'])) {
    $email = $_POST['email'];
    $password =  $_POST['password'];
    $password2 =  $_POST['password2'];
    $date =  $_POST['date'];
    $gender = $_POST['gender'];
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit();
    }

    if ($password === $password2) {
        $hashed_password =hash('sha256',$password);
        $sql = "INSERT INTO logare (email, password, date, gender) VALUES (?, ?, ?, ?)";
        $params = array($email, $hashed_password, $date, $gender);
        $stmt = sqlsrv_query($conn, $sql, $params);
        var_dump($hashed_password);
        if ($stmt === false) {
           
            exit();
        } else {
           
            header("Location: register_login.php");
            exit();
        }
    } else {
        echo "The passwords don't match";
    }
}

sqlsrv_close($conn);
?>