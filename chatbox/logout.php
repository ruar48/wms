<?php 
     require '../config/connect_pdo.php'; 
     include_once '../config/session.php';
      session::checkSession();
   
     if(isset($_SESSION['unique_id'])){
      $id = $_SESSION['unique_id'];
     }
  
    $sql = "UPDATE tbl_users SET status='Offline' WHERE user_id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':id'=>$id]);

    session_unset();
    session_destroy();
   echo "<script>window.location='../index.php';</script>";

?>  