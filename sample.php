
<!DOCTYPE html>
<html>
<head>
<title>Reg Page</title>
</head>
<body>
<?php echo "Hello, PHP!";
 ?>
<br>

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

</form>
</body>
</html>