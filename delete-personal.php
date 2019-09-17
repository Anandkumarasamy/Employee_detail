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
    }
    $sql = "DELETE FROM std_table where id=$id"; 
    if (mysqli_query($conn,$sql)){
        mysqli_close($conn);
        header('Location: show-personal.php');
        exit;
    }else{
        echo "Error deleting record";
    }
    
?>
