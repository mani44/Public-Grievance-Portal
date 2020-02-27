<!DOCTYPE html>
<head>
    <title>SignUp</title>
</div>
<link rel="stylesheet" type="text/css" href="signupcss.css">
</head>

<body>
<div class="messages">
    <div class="log"> 
        <img src="https://www.paceind.com/wp-content/uploads/2016/09/display-14.png">
        <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
            
            <div class="main">
                <div class="left">
                    <input type="text" placeholder="FirstName" name="firstname"><br>
                    <input type="text" placeholder="LastName" name="lastname"><br>
                    <input type="text" placeholder="UserName" name="username"><br>
                </div>
                <div class="right">
                    <input type="email" placeholder="Email" name="email"><br>
                    <input type="password" placeholder="Password" name="password"><br>
                    <input type="password" placeholder="ConfirmPassword" name="confirm"><br>
                </div> 
        </div>
            <input class="sub" type="submit" value="Sign Up">
        </form>
    </div>
    <?php
        $firstname = $lastname = $username = $email = $password = $confirmpassword = "";
        $firstnameErr = $lastnameErr = $usernameErr = $emailErr = $passwordErr = $confirmpasswordErr = "";
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "iwp_project1";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["firstname"]))
            {
                $firstnameErr = "First Name cannot be Empty.";
            }
            else
            {
                if(!preg_match("/^[a-zA-z ]+$/", $_POST["firstname"]))
                {
                    $firstnameErr = "First Name should contain only alphabets and spaces.";
                }
                else
                {
                    $firstname = $_POST["firstname"];   
                }
            }
            if(empty($_POST["lasttname"]))
            {
                $lastnameErr = "Last Name cannot be Empty.";
            }
            else
            {  
                if(!preg_match("/^[a-zA-z ]+$/", $_POST["lasttname"]))
                {
                    $lastnameErr = "Last Name should contain only alphabets and spaces.";
                }
                else
                {
                    $lastname = $_POST["lasttname"]; 
                }
            }
            if(empty($_POST["username"]))
            {
                $usernameErr = "User Name cannot be Empty.";
            }
            else
            { 
                if(!preg_match("/^[a-zA-z0-9_ ]+$/", $_POST["username"]))
                {
                    $usernameErr = "User Name should contain only alphabets, numbers, underscores and spaces.";
                }
                else
                {
                    $username = $_POST["username"];  
                }
            }

            if(empty($_POST["email"]))
            {
                $emailErr = "Email cannot be empty.";
            }
            else
            {
                if(!preg_match("/^[a-zA-Z0-9.-_+%]+@[a-zA-Z]{3,8}\.[a-zA-Z-_]{2,5}$/",$_POST["email"]))
                {
                    $emailErr = "Email format is invalid.";
                }
                else
                {
                    $email = $_POST["email"];
                }
            }
            if(empty($_POST["password"]))
            {
                $passwordErr = "Password cannot be empty";
            }
            else
            {
                if(strlen($_POST["password"])<5)
                {
                    $passwordErr = "Password is too short. It should be more than 5 letters.";
                }
                else
                {
                    $password = $_POST["password"];
                }
            }
            if(empty($_POST["confirm"]))
            {
                $confirmpasswordErr = "Password do not match.";
            }
            else
            {
                if($confirmpassword!== $password)
                {
                    $confirmpasswordErr = "Password do not match.";   
                }
                else
                {
                    $confirmpassword = $_POST["confirm"];
                }
            }
            echo $firstnameErr;
            echo $lastnameErr;
            echo $usernameErr;
            echo $emailErr;
            echo $passwordErr;
            echo $confirmpasswordErr;

            if($username !=''||$email !=''||$firstname!=''||$lastname!=''|| $password!=''||$confirmpassword!=''){
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            else
                echo "Connected!!!";
                $sql = "INSERT INTO signup(firstname, lastname,username, email,password,confirmpassword)
                VALUES ('$firstname', '$lastname', '$username','$email','$password','$confirmpassword')";
            
                if ($conn->query($sql) == TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
            }
            
            
        }
    ?>
</body>