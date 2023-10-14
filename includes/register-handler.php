<?php
        require_once('conn.php');

        
        function checkData($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }
        if(isset($_POST['submit'])){
            $fullname = checkData($_POST['fullname']);
            $location = checkData($_POST['location']);
            $mobile = checkData($_POST['phone']);
            $email = checkData($_POST['email']);
            $password = checkData($_POST['password']);
          
            // check if email already exist
            $query = "SELECT * FROM dispatch_rider WHERE email = '$email' AND deleted = 1";

            //execute query
            $res = mysqli_query($conn, $query);

            if(mysqli_num_rows($res) > 0){

                // error message
                $error_msg = "email--already--exists!";
                header('location: ../register.php?error='.$error_msg);
            } else{

            // try inserting values
            $newPassword = sha1($password);

            $sql = "INSERT INTO dispatch_rider(fullname, email, phone, location, password) VALUES ('$fullname', '$email', '$mobile', '$location', '$newPassword')";
            
            // die($sql);
            // execute query
            $result = mysqli_query($conn, $sql);
            // check if inserted
            // print_r($result);
            echo $result;
            die('Query die!!!');

            if($result){
                session_start(); // automatically logs the user in after registration.
                $_SESSION['email'] = $email;
                header('location: ../user.php');
            }else{
                $failed = "error".mysqli_error($conn);
                header('location: ../index.php?error='.$failed);
                }
            }
        } 


?>