<?php
   $dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = '';
   include 'connect_db.php';

   $username = $_POST['name'];
   //echo $username;
   $id = NULL;
   if ($username != NULL){
      $stmt = $con->prepare("SELECT id FROM users WHERE name = ?");
      $stmt->bind_param("s", $username);
      $stmt->execute();
      $result = $stmt->get_result();
      if($result->num_rows === 0) exit('No such user');
      while($row = $result->fetch_assoc()) {
        $id = $row['id'];
      }
      $stmt->close();
   }

   if($id === NULL) {
      $stmt = $con->prepare("SELECT task FROM tasks");
   }
   else {
      $stmt = $con->prepare("SELECT task FROM tasks WHERE userid = ?");
      $stmt->bind_param("i", $id);
   }
   
   $stmt->execute();
   $result = $stmt->get_result();
   if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Task: " . $row["task"]. "<br>";
    }
   } else {
       echo "No tasks";
   }
   $stmt->close();   
   $con->close();
?>