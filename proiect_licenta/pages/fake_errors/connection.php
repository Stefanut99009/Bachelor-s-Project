<?php
$serverName = "DESKTOP-NQ0QJUP\SQLEXPRESS";
$uid = "";
$pwd = "";
$databaseName = "to_do_list";

$connectionInfo = array(
    "UID" => $uid,
    "PWD" => $pwd,
    "Database" => $databaseName
);

/* Connect using SQL Server Authentication. */
$conn = sqlsrv_connect($serverName, $connectionInfo);
if (!$conn)
    die(print_r(sqlsrv_errors(), true));

?>