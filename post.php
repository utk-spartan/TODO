<?php

use connect_db.php;
$tsk_ID,$tsk,$U_ID;



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



    $conn =

    $sql = "INSERT INTO tasks(taskID,task,ID)"
    VALUES($tsk_ID,$tsk,$U_ID)

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error adding record: " . $conn->error;
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

