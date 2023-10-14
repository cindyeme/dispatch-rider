<?php
	require_once('conn.php');
	session_start();

	// rider session
	if(isset($_SESSION['rider'])){
		$sql = "SELECT * FROM dispatch_rider WHERE id = '".$_SESSION['rider']."'";
		$query = $conn->query($sql);
		$student = $query->fetch_assoc();
	}

	// user session
    if(isset($_SESSION['email'])){
        
        // get the user information.
        // $id = $_SESSION['id'];
        $email = $_SESSION['email'];

        $user_sql = "SELECT * FROM dispatch_rider WHERE email = '$email' AND deleted = 1";
        $result = mysqli_query($conn, $user_sql);

        $user = mysqli_fetch_assoc($result);
    }else{
      $errorMsg = "Login--first!";
        header('location: index.php?error='.$errorMsg);
    }

?>