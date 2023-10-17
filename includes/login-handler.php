<?php
        require_once('conn.php');

            function checkData($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        $email = checkData($_POST['email']);
        $password = checkData($_POST['password']);


            $newPassword = sha1($password);

            $sql = "SELECT * FROM `dispatch_rider` WHERE `email` = '$email'  AND `password` = '$newPassword' ";


            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($res);

            if(mysqli_num_rows($res) > 0){
                echo 1;
                session_start();
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                // header('location: ../user.php');
            } else{
                echo 0;
                $errorMsg = " Please--enter--correct--login--details!";
                // header('location: ../index.php?error='.$errorMsg);
            }


?>