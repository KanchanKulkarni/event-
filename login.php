<html>
<head>
<title>Login</title>
</head>
<body>
	<h1>Welcome Back</h1>
	
<?php  
session_start();
require('config.php');//connect to config file
$Loginid = $_GET['loginid'];
//echo $Loginid;	
$username = $_POST['username'];
$password = $_POST['password'];
//echo $username;
//echo $pass;



    $sql1 = "SELECT * FROM eventmanagement.members WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn,$sql1);
	$count = mysqli_num_rows ($result);
    if($count > 0 ) 
	{
		echo "Login Successfully";
		$row = mysqli_fetch_assoc($result);
        $username = $row['username'];
		$pass = $row['password'];
		
		$_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
		//echo $_SESSION['id'];
		
		if($Loginid==1)
                        {
							header("Location: http://localhost/php/event/web/index.php?view=$username");
							                         
                        }
                        else
                        {
                            header("Location: http://localhost/php/event/web/movie-payment.php");   
                        }
		 //header("Location: http://localhost/php/event/web/index.php?view=$username");

      
    }
else 
    {
        echo "Incorrect Email or Password!!!";
    }
$conn->close();

?> 

</body>

</html>

