
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INCOUNTY | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Welcome to INCOUNTY+</h3>
            <p>Perfectly designed and precisely prepared administration Panel.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To use INCOUNTY+ Administartion Suite.</p>
            <form class="m-t" role="form" action="signin.php" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="email" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.php">Create an account</a>
            </form>
            <p class="m-t"> <small>INCOUNTY+ &copy; <?php echo date('Y');?> Powered by<a href="www.techcube.co.ke" target="_blank"> Techcube Ke</a></small>  </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
