<!DOCTYPE html>
<html>
    
    <?php require '../View/header.php'; ?>
    <?php $ISBNog = $_POST['modify_id']; ?>
    <h2 class="center-align teal-darken-3" style="font-family: Dancing-Script !important; color:white !important;">BOOK DASHBOARD</h2>
   <section class="container black-text teal-lighten-5">
    <form class="teal-lighten-3" action="../Model/modify_book_model.php" method="POST">
    <h3 class="white-text">MODIFY BOOK</h3>    
    <p>FIll in the attributes you want to modify. Leave blank if you want to keep it unchanged</p>
    
        <label class="white-text" style="font-size: 20px">Book Title</label><input type="text" name="title" value="">
        <label class="white-text" style="font-size: 20px">Author</label><input type="text" name="author" value="">
        <label class="white-text" style="font-size: 20px">Genre</label><input type="text" name="genre" value="">
        <label class="white-text" style="font-size: 20px">ISBN</label><input type="text" name="ISBNnew" value="">
        <label class="white-text" style="font-size: 20px">Price</label><input type="text" name="price" value="">
        <label class="white-text" style="font-size: 20px">Quantity</label><input type="text" name="quantity" value="">
        <label class="white-text" style="font-size: 20px">Publishers ID(must exist in our database): </label><input type="text" name="pub_id" value="">
        <input type="hidden" name="modify_id" value="<?php echo $ISBNog;?>" class="btn brand z-depth-0">
        <div class="center"><input type="submit" name="submit" value="submit" class="btn brand z-depth-0"></div>
        <div class="red-text"></div>
    </form>
    </section>
   
</html>