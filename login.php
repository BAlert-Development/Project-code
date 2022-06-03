<?php require_once 'controllers/authController.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | BAlert</title>

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
                    <li><a href="Index.html">HOME</a></li>
                    <li><a href="AboutUs.html">ABOUT</a></li>
                    <li><a href="insert-post.php">ALERT</a></li>
                    <li><a href="Help.html">HELP</a></li>
                    <li><a href="login.php">SIGN IN</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
            </div>
        </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login" >
                <form action="login.php" method="post">
                    <h3 class="text-center">
                        Login
                    </h3>

                    <?php if(count($errors) > 0): ?>
                        <?php foreach($errors as $error): ?>
                    <div class="alert alert-danger">
                        <li><?php echo $error ?> </li>
                        <?php endforeach; ?>
                    </div>

                    <?php endif; ?>

                    <div class="form-group">
                        <label for="username">Username or Email</label>
                        <input type="text" name="username" value="<?php echo $username ?>" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
                    </div>

                    <p class="text-center">Not a member? <a href="Register.php">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>

    <script src="main.js"></script>
</body>
</html>