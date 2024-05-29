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
            $id=13;
            $data = $this->db->prepare('DELETE FROM logare WHERE id=?');
            $data->execute([$id]);
            return json_encode(['status' => 'Record deleted']);
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
