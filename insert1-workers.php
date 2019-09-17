
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
            
        }
        //echo "Connected successfully";

        $level = $_POST['Level'];
        $em =$_POST['Emp-no'];
        $emp_no= $level.$em ;
        $name =$_POST['Name'];
        $age =$_POST['Age'];
        $address =$_POST['Address'];
        $email =$_POST['email'];
        $ph =$_POST['ph-number'];

        //echo "Eno:$emp_no";
        //exit;
        $sql = "INSERT INTO std_table(EMP_NO,NAME,AGE,ADDRESS,EMAIL,PH_NUMBER) VALUES('$emp_no','$name','$age','$address','$email','$ph')";

        if(!mysqli_query($conn,$sql)){
            die('Error: ' . mysqli_error($conn));
            //printf("Error message:", mysqli_error($conn));
        }else{
            $last_id = mysqli_insert_id($conn);
            $selectSql = "SELECT EMP_NO FROM std_table WHERE ID = $last_id";
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
                width: 50%;
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
        <header><h1>INSERT ADDITIONAL INFORMATION</h1></header>
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
                            <form method="post" action="insert1-project.php" enctype="multipart/form-data" padding: 20px >
                                <table align="center" cellpadding="10">                                    
                                    <tr>
                                        <td><br> EMP-NO <br /><br /></td>
                                        <td><input type="text" name="Emp-no" value="<?php echo $selectedId ?>" maxlength="7">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td><br> GENDER <br /><br /></td>
                                        <td><input type="radio" name="Gender" value="Male"> Male
                                            <input type="radio" name="Gender" value="Female"> Female
                                            <input type="radio" name="Gender" value="Other"> Other
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td><br> DEPARTMENT <br /><br /></td>
                                        <td><select name="Department" id="department" required>
                                                <option value="">Select Department</option>
                                                <option value="HR">HR</option>
                                                <option value="Account & Finance">Account & Finance</option>
                                                <option value="Sales & Marketing">Sales & Marketing</option>
                                                <option value="R&D">R&D</option>
                                                <option value="IT-Service">IT-Service</option>
                                                <option value="Product Development">Product Development</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><br> SYSTEM-NO <br /><br /></td>
                                        <td>
                                        <input value="sys" name="Sys" maxlength="3" size="3" readonly><input type="number" name="System-no" value="" maxlength="5" size="5">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><br> BY:VEHICLE <br /><br /></td>
                                        <td><input type="checkbox" name="Vehicle" value="Bike"> Bike
                                            <input type="checkbox" name="Vehicle" value="Car"> Car
                                            <input type="checkbox" name="Vehicle" value="Company Cab"> Cab
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td><br> LANGUAGE KNOWN <br /><br /></td>
                                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <textarea placeholder="Known Language" name="Language" id="language" value="" row="4" cols="30" pattern="^[a-zA-Z][^0-9a-zA-Z]+$" required></textarea>
                                        </td>
                                    </tr>
                                </table><br>
                                <input type="submit" value="Submit" align="center" onclick="alert('Are you sure to insert this information?..')"href="insert1-project.php">
                                <input type="Reset" value="Reset" align="center" href="insert1-workers.php" >

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