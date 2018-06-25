<?php
   $dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = '';
   include 'connect_db.php';


   /*$stmt = $mysqli->prepare("SELECT id FROM users WHERE name = ?");
   $stmt->bind_param("s", $_POST['name']);
   $stmt->execute();
   $result = $stmt->get_result();
   if($result->num_rows === 0) exit('No such user');
   while($row = $result->fetch_assoc()) {
     $id = $row['id'];
   }
   $stmt->close();

   */
   //$username = $_POST['name'];
   $username = 'utk';
   $sql = "SELECT id
      FROM users WHERE name = '$username'";
      //echo $sql;
   $result = $con->query($sql);
   if ($result->num_rows > 0) {
       $row = $result->fetch_assoc();
       $id = $row["id"];
    }
    else {
      echo "User doesn't exist";
    }

   $sql = "SELECT task
      FROM tasks WHERE userid = '$id'";
      //echo $sql;
   $result = $con->query($sql);  
   if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "activity: " . $row["task"]. "<br>";
    }
   } else {
       echo "0 tasks";
   }


   $con->close();
?>