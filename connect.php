<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "LeLeidb";

    $connect = mysqli_connect($host, $user, $password, $database);

    if($connect){
     //   echo "Successfully Connected!";
     //   mysqli_close($connect);  // Close connection immediately
    } else {
        echo "Connection Failed!";
    }
?>
