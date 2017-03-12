<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/normalize.css">        
        <link rel="stylesheet" href="css/responsive.css">
        
<!--        font-->
        <link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css' />

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <link rel="stylesheet" href="../style.css" type="text/css">

        <!--[if IE]>
                <script src="js/html5shiv.js"></script>
                <script src="js/respond.js"></script>
        <![endif]-->

    </head>
    <body>
        <div class="container">
            <div class="card card-container">
<!--                 <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                <img id="profile-img" class="profile-img-card" src="img/human1.jpg" />
                <p id="profile-name" class="profile-name-card"></p>
                <form action="loginAction.php" method="post" class="form-signin">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit">Sign in</button>
                </form><!-- /form -->
                <a href="#" class="forgot-password">
                    Forgot the password?
                </a>
            </div>
        </div>


        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
