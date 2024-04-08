<?php
 session_start();
 $server="localhost";
 $username="root";
 $password="";
 $dbname="qrcodedb";

 $conn=new mysqli($server,$username,$password,$dbname);

 if($conn->connect_error){
  echo "Connection failed" .$conn->connect_error;
 }
$filename = 'AttendanceRecord-'.date('Y-m-d').'.csv';
 $query ="SELECT * FROM table_attendance";
 $result= mysqli_query($conn,$query);

 $array = array();
 $file = fopen($filename,"w");
 $array = array("RollNumber","TimeIN");
 fputcsv($file,$array);

 while($row = mysqli_fetch_array($result)){
    $RollNumber = $row['RollNumber'];
    $TimeIN = $row['TimeIN'];

    $array = array($RollNumber,$TimeIN);
    fputcsv($file,$array);
 }
 fclose($file);

 header("Content-Description: File Transfer");
 header("Content-Disposition: Attachment; filename=$filename");
 header("Content-type: applocation/csv;");
 readfile($filename);
 unlink($filename);
 exit();

?>