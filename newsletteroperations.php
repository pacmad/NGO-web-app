<?php

include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn = test_db_connection();
    if($conn=='0'){
        echo '0';
        exit();
    }
    else{
        $fname = $lname = $email = 'abc';
/*
        $fname = test_input($_POST["fname"]);
        $lname = test_input($_POST["lname"]);
        $email = test_input($_POST["email"]);
*/

        if($email != ''){
            try {
                //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //$sql = "INSERT INTO newsletter (firstname, lastname, email) VALUES ($fname, $lname, $email)";
                // use exec() because no results are returned
                //$conn->exec($sql);
                $sql = "INSERT INTO newsletter (firstname, lastname, email) VALUES (?,?,?)";
                $stmt= $conn->prepare($sql);
                $stmt->execute([$fname, $lname, $email]);
                echo '1';
                //echo "New record created successfully";
            } catch(PDOException $e) {
                echo '0';
                //echo $sql . "<br>" . $e->getMessage();
            }
        }
        else{
            echo 0;
        }
    }
    
    $conn = null;
    exit();
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