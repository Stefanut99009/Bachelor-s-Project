<?php
require 'initialize.php';

class API {
    function Select() {
        $db = new Connect;
        $users = array();
        $data = $db->prepare('SELECT * FROM logare ORDER BY id');
        $data->execute();
        while($outputData = $data->fetch(PDO::FETCH_ASSOC)) {
            $users[$outputData['id']] = array(
                'id' => $outputData['id'],
                'gender' => $outputData['gender'],
                'email' => $outputData['email'],
                'date' => $outputData['date'],
                "password"=>$outputData['password']
            );
        }
        return json_encode($users);
    }
}

$API = new API;
header('Content-Type: application/json');
echo $API->Select();
?>