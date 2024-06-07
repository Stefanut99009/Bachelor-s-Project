@php
@include('connection');
session_start();
if(isset($_POST['email2']) && isset($_POST['password3'])) {
    $email =  $_POST['email2'];
    $password = $_POST['password3'];
    $hashed_password =hash('sha256',$password);

    $query = "SELECT email,password FROM logare WHERE email = ? AND password = ?";
    $params = array($email,  $hashed_password);
    $result = sqlsrv_query($conn, $query, $params);



    $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

    if($row) {
        $_SESSION['email']=$email;

      exit();
    } else {
        echo "No user found with provided credentials.";
    }
    var_dump($hashed_password);
    sqlsrv_free_stmt($result);
    sqlsrv_close($conn);
    return redirect()->intended('/userpage');

}
@endphp
