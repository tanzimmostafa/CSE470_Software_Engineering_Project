<?php
    $errors = ['error'=>'','flag'=>TRUE];
    $id = $_POST['modify_id'];
    include 'DBconn.php';
    if(isset($_POST['submit'])):
        if(!empty($_POST['name'])):
            $name = $_POST['name'];
            $sql = "UPDATE staff SET name ='$name' WHERE id = '$id'";
            mysqli_query($conn,$sql);
        endif;
        if(!empty($_POST['phone'])):
            $phone = $_POST['phone'];
            $sql = "UPDATE staff SET phone ='$phone' WHERE id = '$id'";
            mysqli_query($conn,$sql);
          
        endif;
        if(!empty($_POST['email'])):
            $email = $_POST['email'];
            $sql = "UPDATE staff SET email ='$email' WHERE id = '$id'";
            mysqli_query($conn,$sql);
          
        endif;
        header("Location: staff.php");
    endif;

    if($errors['flag']==TRUE){

    }else{
        $name = '';
        $phone = '';
        $email = '';
        header("Location: staff.php");
    }

?>