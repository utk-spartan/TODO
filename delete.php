<?php

require_once connect_db.php;

// Define variables and initialize with empty values

$id = "";

if ($_SERVER['REQUEST_METHOD'] == "DELETE")
{
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
// get the 'id' variable from the URL
    $id = $_GET['id'];

    try {

        $stmt = $conn->prepare("DELETE FROM activities WHERE taskid = (?)");
        $stmt->bind_param("i", $id);

        $stmt->execute();

        $conn->close();

    } catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
}

}

?>











