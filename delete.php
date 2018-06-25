<?php

require_once 'connect_db.php';

// Define variables and initialize with empty values

$id = "";

if ($_SERVER['REQUEST_METHOD'] === "DELETE")
{

    if (isset($_GET['id'])) {
// get the 'id' variable from the URL
    $id = (int)$_GET['id'];

    try {

        $stmt = $con->prepare("DELETE FROM tasks WHERE taskid = (?)");
        $stmt->bind_param("i", $id);

        $stmt->execute();

        $con->close();

    } catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
}
    else echo "invalid id";
}

?>









