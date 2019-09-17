<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <!-----------------Bootstrap CDN----------------->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
                   integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
                   crossorigin="anonymous">
        <style>
            body{
                background: url(https://images.unsplash.com/photo-1473170611423-22489201d919?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);
                background-repeat:no-repeat;
                background-size: cover;
                color: blue
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
                margin-top: -20px;
                background: lightskyblue;
                color:black;
                width: 500px;
                height: 510px;
            }
            * {
                box-sizing: border-box;
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
                height: 510px; /* only for demonstration, should be removed */
                background: rgb(139, 189, 139);
                text-align: center;
                font-family: Calibri; 
                font-size: 20pt;         
                font-style: normal;
                font-weight: bold; 
                padding: 20px;
                color: black;
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

            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
                margin-top: -35px;
            }

            img.avatar {
                width: 40%;
                border-radius: 50%;
            }
            .container {
                padding: 16px;
            }
            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                city: 0.8;
            }

            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }


        </style>
    </head>
    <body>
        <header><h1>ADMIN</h1></header>
        <section>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li><br>
                    <li><a href="insert1-personal.php">Insert Details</a></li><br>
                    <li><a href="system-allotment.php">Show Detail</a></li><br>
                    <li><a href="admin.php">Admin</a></li><br>

                </ul>
            </nav>
            <article>
            
                <div class="jumbotron">
                    <form method="post" action="show-personal.php" name="loginForm" >
                        <div class="imgcontainer">
                            <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
                        </div>
                        <div class="container">
                            <label for="uname"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="pwd" required>
                            <button type="submit" onclick="return check(this.form)">Login</button>
                            <label>
                                <input type="checkbox" name="remember"> Remember me
                            </label>
                        </div>
                    </form>
                    <script language="javascript">
                        function check(form)
                        {

                        if(form.uname.value == "anand" && form.pwd.value == "anand")
                        {
                            return true;
                        }
                        else
                        {
                            alert("Error Password or Username")
                            return false;
                        }
                        }
                    </script>     
                </div>
                 
            </article>
        </section>

        <footer>
            <p>Have a nice day</p>
        </footer> 

    </body>
</html>