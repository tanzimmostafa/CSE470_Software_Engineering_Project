<?php
    $errors = ['error'=>'','flag'=>TRUE];

    $pub_id = $_POST['modify_id'];
    include 'DBconn.php';
    if(isset($_POST['submit'])):
        if(!empty($_POST['name'])):
            $name = $_POST['name'];
            $sql = "UPDATE publisher SET name ='$name' WHERE pub_id = '$pub_id'";
            mysqli_query($conn,$sql);
        endif;
        if(!empty($_POST['email'])):
            $email = $_POST['email'];
            $sql = "UPDATE publisher SET email ='$email' WHERE pub_id = '$pub_id'";
            mysqli_query($conn,$sql);
          
        endif;
        if(!empty($_POST['address'])):
            $address = $_POST['address'];
            $sql = "UPDATE publisher SET address ='$address' WHERE pub_id = '$pub_id'";
            mysqli_query($conn,$sql);
          
        endif;

        header("Location: publishers.php");
    endif;

    if($errors['flag']==TRUE){

    }else{
        $name = '';
        $email = '';
        $address = '';
        header("Location: publishers.php");
    }
?>