
<?php
//require_once 'connect_db.php';
$con = mysqli_connect("localhost","root","","todo");
    //$user_id = $POST["id"];
    $task_id = $POST["taskID"];
    $task = $POST["task"];
    $sql = "UPDATE tasks SET task=? WHERE taskID = ?";
    if($stmt = mysqli_prepare($con, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sssi", $param_task, $param_taskID);
        $param_task = $task;
        $param_taskID = $task_id;
        //$param_ID = $user_id;
    }
if(mysqli_stmt_execute($stmt)){
    echo "Task updated";
} else{
    echo "Something went wrong. Please try again later.";
}
// Close statement
mysqli_stmt_close($stmt);
mysqli_close($con);
?>
