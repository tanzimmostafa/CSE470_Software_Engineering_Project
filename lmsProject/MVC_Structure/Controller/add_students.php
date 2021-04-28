<!DOCTYPE html>
<html>
    
    <?php require '../View/header.php'; ?>
    <h2 class="center-align teal-darken-3" style="font-family: Dancing-Script !important; color:white !important; ">STUDENT DASHBOARD</h2>
   <section class="container black-text teal-lighten-5">
    <form class="teal-lighten-3" action="../Model/add_students_model.php" method="POST">
    <h3 action="" method="" class="white-text">ADD A STUDENT</h3>    
        <label class="white-text" style="font-size: 20px">Student Name</label><input type="text" name="name" value="">
        <label class="white-text" style="font-size: 20px">Phone</label><input type="text" name="number" value="">
        <label class="white-text" style="font-size: 20px">Address</label><input type="text" name="address" value="">
        <label class="white-text" style="font-size: 20px">Username(must be unique)</label><input type="text" name="username" value="">
        <label class="white-text" style="font-size: 20px">Password</label><input type="text" name="pass" value="">
        <div class="center"><input type="submit" name="submit" value="submit" class="btn brand z-depth-0"></div>
        <div class="red-text"></div>
    </form>
    </section>   
</html>