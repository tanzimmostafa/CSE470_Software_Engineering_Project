<?php
$errors = ['error' => '', 'flag' => FALSE];

if (isset($_POST['submit'])) :
    if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['email'])|| empty($_POST['id'])) :
        $errors['error'] = 'Incomplete Form <br/>';
        $errors['flag'] = TRUE;
    else :

        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        include 'DBconn.php';
        $sql = "INSERT INTO publisher (pub_id,address, email, name) VALUES ('$id','$address','$email','$name')";
        if (mysqli_query($conn, $sql)) {
            $errors['error'] = 'Successfully Added!';
        } else {
            $errors['error'] = 'Something went wrong while adding a publisher!';
        }
    endif;
endif;

if ($errors['flag'] == TRUE) {
    header("Location: ../Controller/add_publishers.php");
} else {

    header("Location: publishers.php");
}


?>