<!DOCTYPE html>
<html>

<?php require '../View/header.php'; ?>
<h2 class="center-align teal-darken-3" style="font-family: Dancing-Script !important; color:white !important; ">PUBLISHERS DASHBOARD</h2>
<section class="container black-text teal-lighten-5">
    <form class="teal-lighten-3" action="../Model/add_publishers_model.php" method="POST">
        <h3 action="" method="" class="white-text">ADD A PUBLISHER</h3>
        <label class="white-text" style="font-size: 20px">ID(Please make it unique!): </label><input type="text" name="id" value="">
        <label class="white-text" style="font-size: 20px">Name: </label><input type="text" name="name" value="">
        <label class="white-text" style="font-size: 20px">Address: </label><input type="text" name="address" value="" >
        <label class="white-text" style="font-size: 20px">Email: </label><input type="text" name="email" value="">
        <div class="center"><input type="submit" name="submit" value="submit" class="btn brand z-depth-0"></div>
        <div class="red-text"></div>
    </form>
</section>

</html>