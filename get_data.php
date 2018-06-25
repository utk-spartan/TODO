<?php
   $dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = '';
   include 'connect_db.php';

   /*$username = 'utk';
   $stmt = $con->prepare("SELECT id FROM users WHERE name = ?");
   $stmt->bind_param("s", $username);
   $stmt->execute();
   $result = $stmt->get_result();
   if($result->num_rows === 0) exit('No such user');
   while($row = $result->fetch_assoc()) {
     $id = $row['id'];
   }
   $stmt->close();*/

   //$stmt = $con->prepare("SELECT task FROM tasks WHERE userid = ?");
   $stmt = $con->prepare("SELECT task FROM tasks");
   //$stmt->bind_param("i", $id);
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