<!DOCTYPE html>
<html lang="en">
<head>
  <title>DETAILS</title>
  
</head>
    
<body style="background-color:rgb(255,182,193)">

<?php
session_start();
require('config.php');

$id=$_POST['eid'];
//echo $id;
$mid=$_SESSION['id'];
//echo $mid;
$bookedseat=$_POST['seat'];
$priz=$_POST['p'];
$tol=$_POST['total'];
        $sql2 = "SELECT * FROM eventmanagement.members WHERE id='$mid' ";    

                            $sql1 = "SELECT * FROM eventmanagement.event WHERE eventid='$id' ";
 
                            $result = $conn->query($sql1);
                            $count=mysqli_num_rows($result);
                            echo "<br/>";
  
                             if($count>0){
                              while($array=mysqli_fetch_row($result))
                             {
                                  $array[0];
                                 echo "<br>";
                                  $id=$array[0];
       $name=$array[1];
        $org=$array[2];
       $venue=$array[4];
        $start=$array[4];
       $end=$array[5];
        $url=$array[6];
       $ticket=$array[7];
        $contact=$array[8];
       $seats=$array[9];
        $terms=$array[10];
       $image=$array[11];
        $banner=$array[12];
       
       $desc=$array[3];
                                
 echo "Thank you for booking event $name <br> 
 Event venue at: $venue<br>
 and your $bookedseat seats are confirmed <br>
 we will send you the tickets to your address shortly";
                                 echo "<br> TOtal price is:$tol";
                                 
                                  $sql = "INSERT INTO eventmanagement.ticketbooking (memberid, eventid, noofticketbooked, totalprize)
    VALUES ('$mid','$id','$bookedseats', '$tol')";
    if(mysqli_query($conn, $sql))
    {
echo "<br>";
        echo "Records added successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

    }
                                // $var=$array[0];
                             }}




?>
<form action="logout.php">
   
<input type="submit" value="LOGOUT">
	</form>
</body>
</html>