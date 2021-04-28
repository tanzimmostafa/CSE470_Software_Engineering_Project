<?php
    $errors = ['error'=>'','flag'=>FALSE];

    if(isset($_POST['submit'])):
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['username']) || empty($_POST['pass'])):
            $errors['error'] ='Incomplete Form <br/>';
            $errors['flag'] = TRUE;
        else:
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $username = $_POST['username'];
            $pass1 = $_POST['pass'];
            $role = "staff";
            include 'DBconn.php';
            $sql = "INSERT INTO auth (pass, username, role) VALUES ('$pass1','$username','$role')";
            mysqli_query($conn, $sql);
            $sql = "INSERT INTO staff (name, email, phone, username) VALUES ('$name', '$email', '$phone', '$username')";
            
            if(mysqli_query($conn, $sql)){
                $errors['error'] = 'Successfully Added!';
            }else{
                $errors['error'] = 'Something went wrong while adding a staff!';
            }
        endif;
    endif;

    if($errors['flag']==TRUE){
        header("Location: ../Controller/add_staff.php");
    }else{
        header("Location: staff.php");
    }


?>