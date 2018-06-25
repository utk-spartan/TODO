<?php

require_once "connect_db.php";



//
//if($_SERVER["REQUEST_METHOD"] == "POST"){
//
//    /* $input_name = trim($_POST["name"]);
//     if(empty($input_name)){
//         $name_err = "Please enter a name.";
//     }
//      else{
//         $name = $input_name;
//     }*/
//
//    $input_id = trim($_POST["id"]);
//    if(empty($input_id)){
//        $id_err = "Please enter id.";
//    }
//    else{
//        $id = $input_id;
//    }
//
//}

var_dump($_POST);

$activity=$_POST["input"];
$act_id=$_POST["id"];
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $stmt = $con->prepare("INSERT INTO tasks (taskID,task) VALUES (?, ?)");
        $stmt->bind_param("is", $task_ID, $task_name);
        $task_ID =$act_id;
        $task_name =$activity;
        $stmt->execute();
       
        $stmt->close();
    }
    else{
        throw new Exception("Request method must be post");
    }




//    if ($conn->query($sql) === TRUE) {
//        echo "Record added successfully";
//    } else {
//        echo "Error adding record: " . $conn->error;
//    }
//
//    $conn->close();
//
//
//    echo "New record created successfully";
//}
//
//catch (PDOException $e)
//{
//    echo "There is some problem in connection: " . $e->getMessage();
//}
?>











