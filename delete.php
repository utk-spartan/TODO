<?php

use connect_db.php;

// Define variables and initialize with empty values
$id = $name = "";

$name_err = $id_err = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){

   /* $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    }
     else{
        $name = $input_name;
    }*/

    $input_id = trim($_POST["id"]);
    if(empty($input_id)){
        $id_err = "Please enter id.";
    }
    else{
        $id = $input_id;
    }

}

try
{
   // connect to databse



    $con =

    $sql = "DELETE FROM activities WHERE taskid = some_value";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();


    echo "New record created successfully";
}

catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}
?>









?>

