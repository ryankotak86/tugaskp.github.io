<!DOCTYPE html>
<html lang="en">
<!-- divinectorweb.com -->
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="static/css/style_login_register.css"> 
</head>
<body>
    <div class="form-box">
        <div class="wrapper">
            <div class="img-area">
                <img src="static/img/LOGO.png" alt="">
            </div>
            <div class="form-area">
                <h3>Login Form</h3>
            <form action="index.php" method="get">
                <div class="single-form">
                    <input type="text" placeholder="Username" required />
                </div>
                <div class="single-form">
                    <input type="password" placeholder="Password" required />
                </div>
                <input type="submit" value="Login"/>
                <p class="back-to-login">Don't have an Account? <a href="register.php">Register</a></p>
            </form>
            </div>
        </div>
    </div>
</body>
</html>
