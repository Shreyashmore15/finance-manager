<?php 

include('header.php');


if (!isset($_SESSION['username'])) 
{
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    
</head>
<body>

    
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
            <h3>
            <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
            ?>
            </h3>
        </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php if (isset($_SESSION['username'])) : ?>
        <p> <strong><?php echo $_SESSION['username']; ?></strong></p>
    
        
    <?php endif ?>
</div>

</body>
</html>

<?php
include('footer.php');
?>
