<?php

// Configurație MSSQL
$serverName = "DESKTOP-NQ0QJUP\SQLEXPRESS";
$connectionOptions = array(
    "Database" => "to_do_list",
    "Uid" => "",
    "PWD" => ""
);

// Conectare la baza de date
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
// Obține metoda HTTP
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'], '/'));

header("Content-Type: application/json");

switch ($method) {
    case 'GET':
        if ($request[0] == 'users') {
            $query = "SELECT * FROM logare";
            $stmt = sqlsrv_query($conn, $query);
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }
            $result = array();
            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                array_push($result, $row);
            }
            echo json_encode($result);
        }
        break;

    case 'PUT':
        parse_str(file_get_contents("php://input"), $put_vars);
        if ($request[0] == 'users' && isset($request[1], $request[2], $request[3])) {
            $newValue1 = $request[1];
            $newValue2 = $request[2];
            $newValue3 = $request[3];
            
            $sql = "INSERT INTO your_table_name (email, password, gender) VALUES (?, ?, ?)";
            $params = array($newValue1, $newValue2, $newValue3, $newValue4);
            $stmt = sqlsrv_query($conn, $query, $params);
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }
            echo json_encode(array("status" => "success"));
        }
        break;

    case 'POST':
        if ($request[0] == 'users' && isset($request[1], $request[2], $request[3])) {
            $id = $request[1];
            $newValue1 = $request[2];
            $newValue2 = $request[3];
            $query = "UPDATE users SET email = ?, password = ? WHERE id = ?";
            $params = array($newValue1, $newValue2, $id);
            $stmt = sqlsrv_query($conn, $query, $params);
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }
            echo json_encode(array("status" => "success"));
        }
        break;

    case 'DELETE':
        if ($request[0] == 'users' && isset($request[1]) && substr($request[1], 0, 1) == 'P') {
            $id = substr($request[1], 1);
            $query = "DELETE FROM users WHERE id = ?";
            $params = array($id);
            $stmt = sqlsrv_query($conn, $query, $params);
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }
            echo json_encode(array("status" => "success"));
        }
        break;

    default:
        header("HTTP/1.1 405 Method Not Allowed");
        break;
}

// Închidere conexiune
sqlsrv_close($conn);

?>
