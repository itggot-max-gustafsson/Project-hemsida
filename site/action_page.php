<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register</title>
    <script src="js/javascript.js"></script>
</head>
<body>
    <div class="container">
        <div class="dropdowncontainer show">
            <div class="nav2 unshow">
                <a onclick="dropdown()"><i class="fa fa-reorder fa-3x"></i></a>
                <a class="navpart1" href="./index.html">Home</a>
                <a class="navpart2" href="./register.html">Register</a>
                <a class="navpart3" href="./login.html">Login</a>
            </div>
        </div>    
        <header>
            <div class="nav">
                <a onclick="dropdown()"><i class="fa fa-reorder fa-3x"></i></a>
            </div>
            <div class="topshit"></div>
            <div class="login"><a class="fa fa-street-view fa-3x" href="./login.html"></a></div>
        </header>
        <p class="welcome"> Welcome <?php echo $_GET["usr"]; ?> </p>
    </div>
</body>
</html>