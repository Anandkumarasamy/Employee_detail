<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TABLE</title>
        <!-----------------Bootstrap CDN----------------->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
                   integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
                   crossorigin="anonymous">
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
            .jumbotron{
                margin-top:-20px;
                background: lightskyblue;
                color:black;
                width: 500px;
                height: 470px;
            }
            * {
                box-sizing: border-box;
            }
            
            body {
                font-family: Arial, Helvetica, sans-serif;
            }
            
            /* Style the header */
            header {
                position: fixed;
                width: 100%;
                background-color: lightseagreen;
                padding: 15px;
                text-align: center;
                font-size: 35px;
            }
            
            /* Create two columns/boxes that floats next to each other */
            nav {
                position: move;
                float: left;
                width: 25%;
                height: 520px; /* only for demonstration, should be removed */
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
            
            /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
            @media (max-width: 600px) {
                nav, article {
                width: 100%;
                height: auto;
                }
            }
            .edit_btn {
                text-decoration: none;
                padding: 2px 5px;
                background: #2E8B57;
                color: white;
                border-radius: 3px;
            }

            .del_btn {
                text-decoration: none;
                padding: 2px 5px;
                color: white;
                border-radius: 3px;
                background: #800000;
            }

            th, td {
                padding: 3px;
            }

            .foot {
                position: fixed;
                top: 610px;
                z-index: 1;
                width: 100%;
                background-color: lightseagreen;
                text-align: Center;
            }

            .foot h3 {
                text-align: Center;
            }

            .progress-container {
                width: 100%;
                height: 5px;
                background: #ccc;
            }

            .progress-bar {
                height: 8px;
                background: #4caf50;
                width: 0%;
            }

            .content {

                padding: 0px 0;
                margin: 0px auto 0 auto;
                width: 100%;
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
        <header>
            <h1>SHOW ADDITIONAL-DETAIL</h1>
        </header><br><br><br><br><br>
        <section>
            <nav>
                <ul>
                    <li><a href="show-personal.php">Show Primary-Details</a></li><br>
                    <li><a href="show-workers.php">Show Additional-Details</a></li><br>
                    <li><a href="show-project.php">Show Project-Details</a></li><br>
                    <a type='button' class='button' href='admin.php' >
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                    </a>
                </ul>
            </nav>
            <article>
                <div class="content">
                
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "root";
                        $dp = "employee";

                        $conn = mysqli_connect($servername, $username, $password, $dp);

                        if (!$conn){
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $sql = "SELECT * FROM work_table"; 
                        $result = mysqli_query($conn,$sql);

                        echo "<table border=3 style='width:100%' >";
                        echo "<thead align='center'>";
                        echo "<th>Emp-no</th>";
                        echo "<th>Gender</th>";
                        echo "<th>Department</th>";
                        echo "<th>System-no</th>";
                        echo "<th>By-vehicle</th>";
                        echo "<th>Language-known</th>";
                        echo "<th colspan='2'>Action</th>";
                        echo "</thead>";

                        if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_array($result)){
                    ?>
                                <tr>
                                <td><?php echo $row['EMP_NO']; ?></td>
                                <td><?php echo $row['GENDER']; ?></td>
                                <td><?php echo $row['DEPARTMENT']; ?></td>
                                <td><?php echo $row['SYSTEM_NO']; ?></td>
                                <td><?php echo $row['BY_VEHICLE']; ?></td>
                                <td><?php echo $row['LANGUAGE_KNOWN']; ?></td>
                                <td><a href="edit-workers.php?id=<?php echo $row['EMP_NO']; ?>" class='edit_btn'>Edit</a></td>
                                <td><a href="delete-workers.php?id=<?php echo $row['EMP_NO']; ?>" class='del_btn'>Delete</a></td>
                                </tr>
                    <?php
                            }
                        }
                        echo "</table>";
                    
                        mysqli_close($conn);
                    ?>
                </div><br><br><br>
            </article>
        </section>
        <footer>
            <br>
            <div class="foot">
                <div class="progress-container">
                    <div class="progress-bar" id="myBar"></div>
                </div> 
                <h3>Have a nice day</h3>  
            </div>
            <script>
                // When the user scrolls the page, execute myFunction 
                window.onscroll = function() {myFunction()};

                function myFunction() {
                var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                var scrolled = (winScroll / height) * 100;
                document.getElementById("myBar").style.width = scrolled + "%";
                }
            </script>
        </footer>
    </body>
</html>

 
	
 