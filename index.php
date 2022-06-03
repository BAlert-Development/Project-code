<?php 

include_once 'controllers/authController.php';

if (!isset($_SESSION['id'])) {
    header('location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | BAlert</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <nav>
            <a href="Index.html"> <img src="Images/logo.jpg"></a>
            <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="AboutUs.html">ABOUT</a></li>
                    <li><a href="insert-post.php">ALERT</a></li>
                    <li><a href="Help.html">HELP</a></li>
                    <li><a href="login.php">SIGN</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div" >
            <?php if(isset($_SESSION['message'])): ?>
                <div class="alert <?php echo $_SESSION['alert-class']; ?>" >
                    <?php echo $_SESSION['message']; 
                    unset ($_SESSION['message']);
                    unset ($_SESSION['alert-class']);
                    ?>
                </div>
                

                <?php endif; ?>
                <h3>Welcome, <?php echo $_SESSION['username']; ?></h3>

                <a href="index.php?logout=1" class="logout" class="text-center">Logout</a>

                <!-- <?php if(!$_SESSION['verified']): ?>
                <div class="alert alert-warning"> -->
                <strong><?php echo $_SESSION['email']; ?></strong>
                </div>
                <?php endif; ?>


                



                <!-- <?php if($_SESSION['verified']): ?>
                <button class="btn btn-block btn-lg btn-primary">I am verified!</button>
                <?php endif; ?> -->
            </div>
        </div>
    </div>

    <script src="main.js"></script>
</body>
</html>