<?php
    $errors = ['error'=>'','flag'=>FALSE];
    
    if(isset($_POST['submit'])):
        if(empty($_POST['name']) || empty($_POST['number']) || empty($_POST['address']) || empty($_POST['username']) || empty($_POST['pass'])):
            $errors['error'] ='Incomplete Form <br/>';
            $errors['flag'] = TRUE;
        else:
            $name = $_POST['name'];
            $number = $_POST['number'];
            $address = $_POST['address'];
            $username = $_POST['username'];
            $pass1 = $_POST['pass'];
            $role = "student";
            include 'DBconn.php';
            $sql = "INSERT INTO auth (pass, username, role) VALUES ('$pass1','$username','$role')";
            mysqli_query($conn, $sql);
            $sql = "INSERT INTO student (name, phone, address, username) VALUES ('$name', '$number', '$address', '$username')";
            
            if(mysqli_query($conn, $sql)){
                $errors['error'] = 'Successfully Added!';
            }else{
                $errors['error'] = 'Something went wrong while adding a student!';
            }
        endif;
    endif;

    if($errors['flag']==TRUE){
        header("Location: ../Controller/add_students.php");
    }else{

        header("Location: students.php");
    }


?>
