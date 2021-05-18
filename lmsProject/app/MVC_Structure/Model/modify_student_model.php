<?php
    $errors = ['error'=>'','flag'=>TRUE];
    $id = $_POST['modify_id'];
    include 'DBconn.php';
    if(isset($_POST['submit'])):
        if(!empty($_POST['name'])):
            $name = $_POST['name'];
            $sql = "UPDATE student SET name ='$name' WHERE id = '$id'";
            mysqli_query($conn,$sql);
        endif;
        if(!empty($_POST['phone'])):
            $phone = $_POST['phone'];
            $sql = "UPDATE student SET phone ='$phone' WHERE id = '$id'";
            mysqli_query($conn,$sql);
          
        endif;
        if(!empty($_POST['address'])):
            $address = $_POST['address'];
            $sql = "UPDATE student SET address ='$address' WHERE id = '$id'";
            mysqli_query($conn,$sql);
          
        endif;

        header("Location: students.php");
    endif;

    if($errors['flag']==TRUE){

    }else{
        $name = '';
        $phone = '';
        $address = '';
        header("Location: students.php");
    }

?>