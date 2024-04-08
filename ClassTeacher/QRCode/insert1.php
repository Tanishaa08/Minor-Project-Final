<?php
    // session_start();
   $server="localhost";
   $username="root";
   $password="";
   $dbname="qrcodedb";

   $conn=new mysqli($server,$username,$password,$dbname);

   if($conn->connect_error){
    echo "Connection failed" .$conn->connect_error;
   }

   if(isset($_POST['text'])){
    
    $voice = new com("SAPI.SpVoice");
    $text =$_POST['text'];
    $message = "Hi" .$text. "Your attendance has been successfully added! Thank You";

    $sql = "INSERT INTO table_attendance(RollNumber,TimeIN) VALUES('$text',NOW())";
    if($conn->query($sql) ===TRUE){
        // $_SESSION['success'] = 'Attendance added successfully';
        $voice->speak($message);
    }else{
        $_SESSION['error'] = $conn->error;
    }
    header("location: index.php");
   }
   $conn->close();
?>