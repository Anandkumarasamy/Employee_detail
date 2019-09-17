
<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dp = "employee";
    $conn = mysqli_connect($servername, $username, $password, $dp);
   
    
    if (! empty($_POST)){
    
        // print_r($conn);exit;

        if (!$conn){
            //echo "Failed to connect to datbase";
            die("Connection failed: " . mysqli_connect_error());
        }
        else{
        //echo "Connected successfully";
        }

        $emp_no =$_POST['Emp-no'] ;
        $gender =$_POST['Gender'];
        $department =$_POST['Department'];
        $system_no =$_POST['Sys'].$_POST['System-no'];
        $vehicle =$_POST['Vehicle'];
        $language =$_POST['Language'];

        //echo "Eno:$emp_no";
        //exit;
        $sql = "INSERT INTO work_table(EMP_NO,GENDER,DEPARTMENT,SYSTEM_NO,BY_VEHICLE,LANGUAGE_KNOWN) VALUES('$emp_no','$gender','$department','$system_no','$vehicle','$language')";
 
        if(!mysqli_query($conn,$sql)){
            die('Error: ' . mysqli_error($conn));
            //printf("Error message:", mysqli_error($conn));
        }else{
            $last_id = mysqli_insert_id($conn);
            //print_r($last_id);
            //exit;
            $selectSql = "SELECT EMP_NO FROM work_table WHERE ID = $last_id";
            $selectResult = mysqli_query($conn,$selectSql);
            $row=mysqli_fetch_array($selectResult);
            $selectedId = $row['EMP_NO'];
        } 
         
        mysqli_close($conn);
    }
    //if(empty($_POST)){
        //$lastIdSql = "SELECT EMP_NO FROM std_table ORDER BY ID DESC LIMIT 1";
        //$lastIdResult = mysqli_query($conn,$lastIdSql);
        //$row=mysqli_fetch_array($lastIdResult);
        //$selectedId = $row['EMP_NO'];
    //}     
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>INSERT</title>
        <!-----------------Bootstrap CDN----------------->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            body{
                background: url(https://images.unsplash.com/photo-1473170611423-22489201d919?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);
                background-repeat:no-repeat;
                background-size: cover;
                color: black;
                }
            h1{
                font-family: Calibri; 
                font-size: 25pt;         
                font-style: normal;
                font-weight: bold; 
                color:black;
                text-decoration: underline
            }

            label{
                font-size: 120%;
            }

            .jumbotron {
                margin-top: -20px;
                background: lightskyblue;
                color: black;
                width: 55%;
                height: 500px;
                box-align: left;
            }

            * {
                box-sizing: border-box;
                align-items: center;
            }
            
            body {
                font-family: Arial, Helvetica, sans-serif;
            }
            
  
            /* Style the header */
            header {
                background-color: lightseagreen;
                padding: 15px;
                text-align: center;
                font-size: 35px;
            }
            
            /* Create two columns/boxes that floats next to each other */
            nav {
                float: left;
                width: 25%;
                height: 500px; /* only for demonstration, should be removed */
                background: rgb(139, 189, 139);
                text-align: center;
                font-family: Calibri; 
                font-size: 20pt;         
                font-style: normal;
                font-weight: bold; 
                padding: 20px;
                color: blue
            }
            
            /* Style the list inside the menu */
            nav ul {
                list-style-type: none;
                padding: 0;
            }
            article {
                float: left;
                scroll-margin: left:inherit;
                padding: 20px;
                width: 75%;
                height: 300px; /* only for demonstration, should be removed */
            }
            
            /* Clear floats after the columns */
            section:after {
                content: "";
                display: table;
                clear: both;
            }
            
            /* Style the footer */
            footer {
                background-color: lightseagreen;
                padding: 10px;
                font-family: Calibri; 
                font-size: 18pt;         
                font-style: normal;
                text-align: center;
                color: black;
            }
            
            /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
            @media (max-width: 600px) {
                nav, article {
                width: 100%;
                height: auto;
                
            }
            }

        </style>
    </head>

    <body>
        <header><h1>INSERT PROJECT INFORMATION</h1></header>
        <section>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li><br>
                    <li><a href="insert1-personal.php">Insert Primary-Details</a></li><br>
                    <li><a href="insert1-workers.php">Insert Additional-Details</a></li><br>
                    <li><a href="insert1-project.php">Insert Project-Details</a></li><br>
                    <li><a href="system-allotment.php">Show Details</a></li><br>
                    <li><a href="admin.php">Admin</a></li><br>
                </ul>
            </nav>
            <article>
                <div class="container" >
                    <div class="jumbotron" align="center">
                        <div class="container" align="center">
                            <form method="post" action="insert-project.php" enctype="multipart/form-data" padding: 20px >
                                <table align="center" cellpadding="10">                                    
                                    <tr>
                                        <td><br> EMP-NO <br /><br /></td>
                                        <td>&nbsp&nbsp&nbsp
                                            <input type="text" name="Emp-no" value="<?php echo $selectedId ?>" maxlength="7" readonly>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td><br> MARRIAGE STATUS<br /><br /></td>
                                        <td>&nbsp&nbsp&nbsp
                                            <input type="radio" name="Marriage" value="Single"> Single
                                            <input type="radio" name="Marriage" value="Married"> Married 
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td><br> TEAM NAME <br /><br /></td>
                                        <td>&nbsp&nbsp&nbsp
                                            <input type="text" name="T-Name" value="" maxlength="25" pattern="^[0-9a-zA-Z_\-\.]+$" required >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><br>TOTAL TEAM MEMBERS<br /><br /></td>
                                        <td>&nbsp&nbsp&nbsp
                                        <input type="number" name="T-Member" value="" maxlength="2" size="2" pattern="[0-1]{1}[0-9]{1}" required >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><br>PROJECT NAME<br /><br /></td>
                                        <td>&nbsp&nbsp&nbsp
                                            <input type="text" name="P-Name" value="" maxlength="30" pattern="^[0-9a-zA-Z\s]+$" required  >
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td><br> PROJECT DURATION <br /><br /></td>
                                        <td>&nbsp&nbsp&nbsp
                                        <input type="number" name="P-Duration" value="" maxlength="2" size="2" pattern="[0-1]{1}[0-9]{1}" required >
                                        <select name="Duration" id="duration" >
                                                <option value="Months">Months</option>
                                                <option value="Years">Years</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table><br>
                                <input type="submit" value="Submit" align="center" onclick="alert('Are you sure to insert this information?..')"href="insert-project.php">
                                <input type="Reset" value="Reset" align="center" href="insert1-project.php" >

                            </form>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <footer>
            <p>Have a nice day</p>
        </footer>
    </body>
</html>