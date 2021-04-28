<!DOCTYPE html>
<html>
    
    <?php require '../View/header.php'; ?>

    <h2 class="center-align teal-darken-3" style="font-family: Dancing-Script !important; color:white !important; ">BOOKS DASHBOARD</h2>
   <section class="container black-text teal-lighten-5">
    <form class="teal-lighten-3" action="../Model/add_books_model.php" method="POST">
    <h3 class="white-text">ADD A BOOK</h3>    
        <label class="white-text" style="font-size: 20px">Book Title</label><input type="text" name="title" value="">
        <label class="white-text" style="font-size: 20px">Author</label><input type="text" name="author" value="">
        <label class="white-text" style="font-size: 20px">Genre</label><input type="text" name="genre" value="">
        <label class="white-text" style="font-size: 20px">ISBN</label><input type="text" name="ISBN" value="">
        <label class="white-text" style="font-size: 20px">Price</label><input type="text" name="price" value="">
        <label class="white-text" style="font-size: 20px">Quantity</label><input type="text" name="quantity" value="">
        <label class="white-text" style="font-size: 20px">Publishers ID(This must exist in our database): </label><input type="text" name="pub_id" value="">
        <div class="center"><input type="submit" name="submit" value="submit" class="btn brand z-depth-0"></div>
        <div class="red-text"></div>
    </form>
    </section>
   

        
   
</html>