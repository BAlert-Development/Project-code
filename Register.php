<?php require_once 'controllers/authController.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | BAlert</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <nav>
        <a href="Index.html"> <img src="Images/logo.jpg"></a>
        <div class="nav-links" id="navLinks">
            <ul>
                <li><a href="Index.html">HOME</a></li>
                <li><a href="About.html">ABOUT</a></li>
                <li><a href="insert-post.php">ALERT</a></li>
                <li><a href="Help.html">HELP</a></li>
                <li><a href="login.php">SIGN IN</a></li>
            </ul>
        </div>
    </nav>

    
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div register" >
                <form action="register.php" method="post">
                    <h3 class="text-center">
                        Register
                    </h3>

                    <?php if(count($errors) > 0): ?>
                        <?php foreach($errors as $error): ?>
                    <div class="alert alert-danger">
                        <li><?php echo $error ?> </li>
                        <?php endforeach; ?>
                    </div>

                    <?php endif; ?>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?php echo $username ?>" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?php echo $email ?>" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                        <label for="passwordConf">Confirm Password</label>
                        <input type="password" name="passwordConf" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="register-btn" class="btn btn-primary btn-block btn-lg">Register</button>
                    </div>

                    <p class="text-center">Already a member? <a href="login.php">Sign In</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>