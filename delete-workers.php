<?php
$id=$_GET['id'];
//connectivity
//require(edit.php);

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dp = "employee";

    $conn = mysqli_connect($servername, $username, $password, $dp);

    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }else{
        //echo "Connection done!!";
    }

    $sql = "DELETE FROM work_table where emp_no='$id'"; 
    //print_r($sql);
    //exit;

    if (mysqli_query($conn,$sql)){
        mysqli_close($conn);
        header('Location: show-workers.php');
        exit;
    }else{
        echo "Error deleting record";
    }
    
?>
