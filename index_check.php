<?php
include "db_connect.php";

echo md5("pass123");
$name = "austin" ;
$sql = "SELECT `password` FROM `users` WHERE `users`.`username` = '$name'";
if ($result = mysqli_query($conn, $sql)){
}else{
    echo mysqli_error($conn);
}
if ( mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_assoc($result)) {
       $password = $row['password'];
   } 
   echo $password;
}else {
    echo "0"."<br>";
}
     
mysqli_close($conn);

?>