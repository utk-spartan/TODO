<?php

use connect_db.php;

// Define variables and initialize with empty values


if _$SERVER['REQUEST_METHOD']
{
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
// get the 'id' variable from the URL
    $id = $_GET['id'];

    try {

        $sql = "DELETE FROM activities WHERE taskid = $id";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: ";
        }

        $conn->close();

    } catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
}

}

?>











