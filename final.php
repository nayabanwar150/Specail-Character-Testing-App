<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "adainfront"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}

    if (!empty($_POST['username'])){
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $message = mysqli_real_escape_string($con,$_POST['message']);
        //query for inserting records into database
        $sql = "INSERT INTO specialcharater (username, message) VALUES ('$username', '$message')";
        $query = mysqli_query($con,$sql);

        if($query){
            echo "Congrats! you're message has been inserted:).";
        }else{
            echo "not inserted <br>".$con->error;
        }
    }else{
        echo " please enter username";
    }

?>