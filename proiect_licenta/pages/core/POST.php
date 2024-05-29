<?php
require 'initialize.php';

class API {
    private $db;

    function __construct() {
        $this->db = new Connect;
    }

    function Insert($input) {
        // Validate input
        $date = date('Y-m-d', strtotime("12.03.2012"));
        try {
            // Generate random values for testing purposes
            $gender = "Male"; // Or you can randomly select from ['Male', 'Female']
            $email ="ceva2@gmail.com"; // Use the provided email from input
            $password = password_hash("secret123", PASSWORD_DEFAULT); // Hashed password for security

            $data = $this->db->prepare('INSERT INTO logare (gender, email, date, password) VALUES (?, ?, ?, ?)');
            $data->execute([$gender, $email, $date, $password]);
            return json_encode(['status' => 'Record created']);
        } catch (PDOException $e) {
            return json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}

$API = new API;
header('Content-Type: application/json');
$input = json_decode(file_get_contents('php://input'), true);
echo $API->Insert($input);
?>
