<?php

    //include 'database.php';

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$fname = $lname = $email = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $email = test_input($_POST["email"]);
  $inquiry = test_input($_POST["inquiry"]);

  $servername = "localhost";
	$username = "root";
	$password = "";
    $db="zaa";
    
    if($email != ''){
        $conn = mysqli_connect($servername, $username, $password,$db);
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO messages (firstname, email, inquiry)
            VALUES ('$fname', '$email', '$inquiry')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo '1';
            //echo "New record created successfully";
        } catch(PDOException $e) {
            echo '0';
            //echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
    }
    else{
        echo 0;
    }
}

/*$sql = "INSERT INTO 'newsletter'( 'firstname', 'lastname', 'email') 
	VALUES ('$fname','$lname,'$email')";
	if (mysqli_query($conn, $sql)) {
        echo '1';
	} 
	else {
        echo '0';
	}
	mysqli_close($conn);

//echo $fname.$lname.$email;*/
?>