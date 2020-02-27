<!DOCTYPE html>
<head>
    <title>Login</title>
<link rel="stylesheet" type="text/css" href="logincss.css">
</head>

<body>
    <div class="log"> 
        <img src="https://www.paceind.com/wp-content/uploads/2016/09/display-14.png">
       
        <form action="main.php" method="post">
            <input type="text" placeholder="Username"><br>
            <input type="password" placeholder="Password"><br>
            <input class="sub" type="submit" value="Login">
            
        </form>
        <a href="signup.php">Not a User? Sign Up here</a>
    </div>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "iwp_project1";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else
            echo "Connected!!!";       
    ?>
</body>