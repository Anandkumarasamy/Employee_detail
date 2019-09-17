<?php
$id=$_GET['id'];
//connectivity
$servername = "localhost";
$username = "root";
$password = "root";
$dp = "employee";

$conn = mysqli_connect($servername, $username, $password, $dp);

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}else{
    // echo "Connection is done";
}

$sql = "SELECT * FROM work_table where emp_no='$id'"; 
$result = mysqli_query($conn,$sql);

if (count($result) == 1){
    $row=mysqli_fetch_array($result);
    $emp_no=$row['EMP_NO'];
    $gender=$row['GENDER'];
    $department=$row['DEPARTMENT'];
    $system_no=$row['SYSTEM_NO'];
    $vehicle=$row['BY_VEHICLE'];
    $language=$row['LANGUAGE_KNOWN'];    
}
//print_r($emp_no);
//exit;
?>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UPDATE</title>
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
                width: 45%;
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
            .button{
                background-color: red; /* Green */
                border: 1;
                padding:5px 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer; 
                color: white 
            }
        </style>
    </head>

    <body>
        <header><h1>UPDATE ADDITIONAL INFORMATION</h1></header>
        <section>
            <nav>
                <ul>
                    <li><a href="edit-workers.php">Update Additional-Details</a></li><br>
                    <li><a href="show-workers.php">Show Details</a></li><br>
                    <a type='button' class='button' href='admin.php' >
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                    </a>
                </ul>
            </nav>
            <article>
                <div class="container" >
                    <div class="jumbotron" align="center">
                        <div class="container" align="center">
                            <form method="post" action="update-workers.php" enctype="multipart/form-data" padding: 20px>
                                <table align="center" cellpadding="8">       
                                    <tr>
                                        <td><br> EMP-NO <br /><br /></td>
                                        <td><input type="text" name="Emp-no" value="<?php echo $emp_no; ?>" maxlength="" pattern="^[A-Za-z0-9]+$" readonly/>      
                                        </td>
                                    </tr>
                                   
                                         
                                    <tr>
                                        <td><br><br>GENDER <br /><br /></td>
                                        <td><input type="radio" name="Gender" value="Male" <?php if($gender =="Male"){echo "checked";}?>> Male
                                            <input type="radio" name="Gender" value="Female" <?php if($gender =="Female"){echo "checked";}?>> Female
                                            <input type="radio" name="Gender" value="Other" <?php if($gender =="Other"){echo "checked";}?>> Other
                 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><br> DEPARTMENT <br /><br /></td>
                                        <td><select name="Department" id="department" >
                                                <option value="">Select Department</option>
                                                <option value="HR" <?php if($departmet == "HR"){echo "selected";}?> >HR</option>
                                                <option value="Acount & Finance"<?php if($departmet == "Acount & Finance"){echo "selected";}?> >Account & Finance</option>
                                                <option value="Sales & Marketing" <?php if($departmet == "Sales & Marketing"){echo "selected";}?> >Sales & Marketing</option>
                                                <option value="R&D" <?php if($departmet == "R&D"){echo "selected";}?> >R&D</option>
                                                <option value="IT-Service" <?php if($departmet == "IT-Service"){echo "selected";}?> >IT-Service</option>
                                                <option value="Product Development" <?php if($departmet == "Product Development"){echo "selected";}?> >Product Development</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><br> SYSTEM-NO <br /><br /></td>
                                        <td><input type="text" name="System-no" value="<?php echo $system_no; ?>" maxlength="10" size="10" required>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><br> BY:VEHICLE <br /><br /></td>
                                        <td><input type="checkbox" name="Vehicle" value="Bike" <?php if($vehicle =="Bike"){echo "checked";}?>> Bike
                                            <input type="checkbox" name="Vehicle" value="Car" <?php if($vehicle =="Car"){echo "checked";}?>> Car
                                            <input type="checkbox" name="Vehicle" value="Company Cab" <?php if($vehicle =="Company Cab"){echo "checked";}?>> Cab
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><br> LANGUAGE KNOWN <br /><br /></td>
                                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input type="text" name="Language" value="<?php echo $language; ?>" required />
                                        </td>
                                    </tr>
                                </table><br><br />
                                <input type="submit" value="Update" align="center" onclick="alert('Informations are updated!')" href="update-workers.php">
                                <button onclick="show-workers.php" align="center">Save</button>
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
