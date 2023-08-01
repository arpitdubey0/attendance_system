<html>
        <head>
            <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
            <!-- Bootstrap only -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

            <!-- <link rel="stylesheet" href="./login_style.css"> -->
            <link rel="stylesheet" href="./style.css">
            <link rel="stylesheet" href="login_style.css?v=<?php echo time(); ?>">
        </head>


        <body>
            <!-- <header style="" class="header"> -->
                   <nav class="navbar navbar-expand-lg navbar-dark  px-4 py-3" style="background-color: #751111;">
                    <a class="navbar-brand px-3 mx-2" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active px-3 mx-2">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item px-3 mx-2">
                            <a class="nav-link" href="">Login</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            <!-- </header> -->
            <main>
                <div class="container">
                    <div class="signin-signup">
                        <form action="login_validation.php" class="sign-in-form" name="form" value="ab" method="POST">
                            <h2 class="title">Teacher Sign In</h2>
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" name="teacher_username" placeholder="Email" required>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="teacher_pass" placeholder="Password" required>
                            </div>
                            <input type="submit" value="Login" class="btn">
                            <p class="account-text">Try to login with <a href="#" id="sign-up-btn2">Admin</a></p>
                        </form>
                        <form action="login_validation.php" class="sign-up-form" method="POST">
                            <h2 class="title">Admin Sign In</h2>
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" name="admin_username" placeholder="email" required>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="admin_pass" placeholder="Password" required>
                            </div>
                            <input type="submit" value="Sign IN" class="btn">
                            <p class="account-text">Try to login with <a href="#" id="sign-in-btn2">Teacher</a></p>
                        </form>
                    </div>
                    <div class="panels-container">
                        <div class="panel left-panel">
                            <div class="content">
                                <h3>Teacher Sign In</h3>
                                <p>Click button for teacher sign in</p>
                                <button class="btn submit" id="sign-in-btn">Sign In</button>
                            </div>
                            <img src="./undraw_secure_login_pdn4__1_-removebg-preview 1.png" class="image" alt="">
                        </div>
                        <div class="panel right-panel">
                            <div class="content">
                                <h3>Admin Sign In</h3>
                                <p>Click button for admin sign in</p>
                                <button class="btn" id="sign-up-btn">Sign IN</button>
                            </div>
                            <img src="./undraw_secure_login_pdn4__1_-removebg-preview 1.png" class="image" alt="">
                        </div>
                    </div>
                </div>
            </main>
            <?php
                if (isset($_GET['err'])) {
                    echo "<br> invalid login!";
                }
            ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

        <script src="app.js"></script>
    </body>
    </html>