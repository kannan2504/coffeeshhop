<!-- // <?php -->
// $servername = "localhost";
// $username = "root";
// $password = "pass@123";
// $dbname = "mydatabase";


// $conn = new mysqli($servername, $username, $password, $dbname);
// $firstname=$_POST['user_name'];


// $sql = "SELECT * from student_data where fname='$firstname'";

// $result = $conn->query($sql);

// if ($result->num_rows > 0) 
// {

//   while( $row = $result->fetch_assoc() )
//   {
//   echo "fname". $row["fname"]. " lname: " . $row["lname"]. "  mobile: " . $row["mobile"]." password: " . $row["password1"]. "<br>";
//   }

// } 
// else
//  {
//   echo "0 results";
//  }

// $conn->close();

// ?>

showrecords.php -->

<?php
$servername = "localhost";
$username = "root";
$password = "pass@123";
$dbname = "mydatabase";


$conn = new sqli($servername, $username, $password, $dbname);


$sql = "SELECT * from feedback";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{

  while( $row = $result->fetch_assoc() )
  {
  echo "Name". $row["user_name"]. "  Mail " . $row["user_mail"]." phone Number: " . $row["phone_number"]. "<br>";
  }

} 
else
 {
  echo "0 results";
 }

$conn->close();

?>



<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "pass@123";
  $dbname = "mydatabase";
  $conn = new mysqli($servername, $username, $password, $dbname);
 
 
    $user_name=$_POST["user_name"];
    $user_mail=$_POST["user_mail"];
    $phone_number=$_POST["phone_number"];
   
   
    $sql = "INSERT INTO feedback VALUES ($user_name,  $user_mail,$phone_number )";

    $result = $conn->query($sql);

    if ($result == TRUE)
    {
      echo "New record created successfully.";
      //header('Location: displayrecords.php');
    }
    else
    {
      echo "Error:". $sql . "<br>". $conn->error;
    }

    $conn->close();
  
?>





working


<!DOCTYPE html>
<html>
<head>
<title>Reg Page</title>
</head>
<body>
<?

php echo "welcome" ;
 ?>
<br>

<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "pass@123";
  $dbname = "isql";
  $conn = new mysqli($servername, $username, $password, $dbname);
 
 
   
    $user_name=$_POST["user_name"];
 $email=$_POST["email"];
    $phone_number=$_POST["phone_number"];
   
   
    $sql = "INSERT INTO feedback VALUES ('$user_name', ' $email','$phone_number' )";

    $result = $conn->query($sql);
	echo "hello , ".$user_name."<br>";
    if ($result == TRUE)
    {
      echo "Thanks for submitting your record";


	
      //header('Location: displayrecords.php');
    }
    else
    {
      echo "Error:". $sql . "<br>". $conn->error;
    }

    $conn->close();
  
?>

</form>
</body>
</html>