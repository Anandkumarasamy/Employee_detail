<?php
    //connectivity

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dp = "employee";

    $conn = mysqli_connect($servername, $username, $password, $dp);

    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = $_POST['id'];
    $emp_no = $_POST['Emp-no'];
    $name = $_POST['Name'];
    $age = $_POST['Age']; 
    $address = $_POST['Address'];
    $email = $_POST['mail'];
    $ph_no = $_POST['ph-number'];

    //print_r($_POST);
    //exit;
    
    $sql = "UPDATE std_table SET EMP_NO='$emp_no', NAME='$name', AGE='$age', ADDRESS='$address', EMAIL='$email', PH_NUMBER='$ph_no' WHERE id=$id"; 
    if (mysqli_query($conn,$sql)){
        mysqli_close($conn);
        header('Location: show-personal.php');
        exit;
    }else{
        echo "Error updating record:". mysqli_error($conn);
    } 

?>
