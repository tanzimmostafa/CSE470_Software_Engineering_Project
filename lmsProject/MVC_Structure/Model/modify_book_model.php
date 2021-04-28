<?php
    $errors = ['error'=>'','flag'=>TRUE];

    $ISBNog = $_POST['modify_id'];

    include 'DBconn.php';
    
    if(isset($_POST['submit'])):
        if(!empty($_POST['title'])):
            $title = $_POST['title'];
            $sql = "UPDATE book SET title ='$title' WHERE ISBN = '$ISBNog'";
            mysqli_query($conn,$sql);
        endif;
        if(!empty($_POST['author'])):
            $author = $_POST['author'];
            $sql = "UPDATE book SET author ='$author' WHERE ISBN = '$ISBNog'";
            mysqli_query($conn,$sql);
        endif;
        if(!empty($_POST['genre'])):
            $genre = $_POST['genre'];
            $sql = "UPDATE book SET genre ='$genre' WHERE ISBN = '$ISBNog'";
            mysqli_query($conn,$sql);
        endif;
        if(!empty($_POST['quantity'])):
            $quantity = $_POST['quantity'];
            $sql = "UPDATE book SET quantity ='$quantity' WHERE ISBN = '$ISBNog'";
            mysqli_query($conn,$sql);
        endif;

        if(!empty($_POST['pub_id'])):
            $pub_id = $_POST['pub_id'];
            $sql = "UPDATE book SET pub_id ='$pub_id' WHERE ISBN = '$ISBNog'";
            mysqli_query($conn,$sql);
        endif;
            if(!empty($_POST['price'])):
            $price = $_POST['price'];
            $sql = "UPDATE book SET price ='$price' WHERE ISBN = '$ISBNog'";
            mysqli_query($conn,$sql);
        endif;
        if(!empty($_POST['ISBNnew'])):
            $ISBNnew = $_POST['ISBNnew'];
            $sql = "UPDATE book SET ISBN ='$ISBNnew' WHERE ISBN = '$ISBNog'";
        
            mysqli_query($conn,$sql);
        endif;


        header("Location: bookdash.php");
    endif;

    if($errors['flag']==TRUE){

    }else{
        $title = '';
        $author = '';
        $genre = '';
        $quantity = '';
        $pub_id = '';
        $ISBNog = '';
        $price = '';
        header("Location: ../Controller/modify_books.php");
    }


?>