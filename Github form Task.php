<?php 
require("db_connection.php");

function clear (){
    $username = "";
    $pwd = "";
    $number="";

}
if(isset($_POST['save'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $number = $_POST['number'];
    $username = $_POST['username'];
    $pwd = $_POST['pass'];
    $confirmpass = $_POST['Cpass'];
  

        
        if($pwd == $confirmpass){
            $query = "INSERT INTO gittable(name, email, dob, number, username, pass, confpass) VALUES ('$name','$email','$date','$number', '$username', '$pwd','$confirmpass')";
            
            
            if(mysqli_query($con, $query)){
                echo "<h1>Record added successfully</h1>";
            } else {
                echo "<h1>There was an error</h1>";
            }
        } else {
            echo "<h1>Passwords do not match</h1>";
        }
        // clear();
    }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color: white;
        }
        body{
            background-color: darkcyan;
        }
        .form{
            margin-left: 460px ;
            border: 1px solid black;
            width: 400px;
            background-color: white;
            height: 600px;
        }
        .form a{
            position: relative;
            top: 20px;
            left: 40px;
            border: 1px solid black;
            padding: 8px 18px;
            text-decoration: none;
            /* margin-top: 50px; */
            margin-left: 180px;
            border-radius: 8px;
        }
        input{
            position: relative;
            left: 5px;
            padding: 8px 12px;
        }
        .form a:hover{
            background-color: darkmagenta;
            color: white;
        }
        .submit{
            position: relative;
            left: 220px;
            top: 5px;
            cursor: pointer;
            padding: 8px 22px;
           
            
        }
        .submit:hover{
            color: white;
            background-color: black;
        }
        p{
            margin-left:20px;
        }
    </style>
</head>
<body>
    <center>
        <h1>Registration form of GitHub</h1>
    </center> 
 
    <div class="form" >
     <form action="MAMTASK.php" method="post">
        <p>Name: <input type="text" name="name" placeholder="Write your Name" required> <br> <br> </p>  
         <p>Email: <input type="email" name="email" placeholder="username@gmail.com" required><br><br></p>
         <p>Date of Birth <input type="date" name="date" id=""> <br><br></p>
        <p> Number: <input type="number" name="number" placeholder="+92-3070930918" required> <br> <br></p>
         <p>UserName: <input type="text" name="username" placeholder="Username123" required> <br> <br></p>
        <p> Password: <input type="password" name="pass" placeholder="should contain @#$1234"> <br> <br></p>
        <p>Confirm Password: <input type="password" name="Cpass" placeholder=""> <br> </p>
        <p><input class="submit" type="Submit" value="Submit" name="save"></p>
     </form>
    </div>
</body>
</html>

