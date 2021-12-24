<!DOCTYPE html>
<html lang="en">
<?php
include('./_partials/head.php');
?>
<body>
    <div class="container-fluid m-0 p-0">
        <!-- Header starts-->
        <?php
            include('./_partials/header.php');
        ?>
         <!-- Header ends-->

         <!--Courses starts-->
         <div class="container">
            <h1 class="text-center">All Courses</h1>
            <!-- Start Most Popular Coursesv1st Card Deck -->
            <?php
                include('./_partials/courseList.php');
             ?>
             <?php
             include('./contact.php');
             ?>
             <?php
             include('./studentfeedback.php');
             ?>
             <?php
             include('./socialfollow.php');
             ?>
             <?php
             include('./aboutsection.php');
             ?>
             <?php
             include('./footer.php');
             ?>
            </div>
        </div>
         <!-- Cources ends-->
    </div>
    <?php
    include('./_partials/signup.php');
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/ajaxrequest.js"></script>
</body>
</html>