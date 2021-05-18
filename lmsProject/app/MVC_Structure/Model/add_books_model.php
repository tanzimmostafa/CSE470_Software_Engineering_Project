<?php
    $errors = ['error'=>'','flag'=>FALSE];
    
    if(isset($_POST['submit'])):
        if(empty($_POST['title']) || empty($_POST['author']) || empty($_POST['genre']) || empty($_POST['quantity']) || empty($_POST['pub_id'])|| empty($_POST['ISBN']) || empty($_POST['price'])):
            $errors['error'] ='Incomplete Form <br/>';
            $errors['flag'] = TRUE;
        else:
          $title = $_POST['title'];
          $author = $_POST['author'];
          $genre = $_POST['genre'];
          $quantity = $_POST['quantity'];
          $pub_id = $_POST['pub_id'];
          $ISBN = $_POST['ISBN'];
          $price = $_POST['price'];
            include 'DBconn.php';
            
            $sql = "INSERT INTO `book` (`ISBN`, `title`, `author`, `genre`, `price`, `shelf`, `quantity`, `pub_id`) VALUES ('$ISBN', '$title', '$author', '$genre', '$price', 'A1', '$quantity', '$pub_id')";
            
            if(mysqli_query($conn, $sql)){
                $errors['error'] = 'Successfully Added!';
            }else{
                $errors['error'] = 'Something went wrong when adding the book!';
            }
        endif;
    endif;

    if($errors['flag']==TRUE){
        header("Location: ../Controller/add_books.php");
} else{

        header("Location: bookdash.php");
    }


?>