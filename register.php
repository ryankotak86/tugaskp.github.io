<!DOCTYPE html>
<html lang="en">
<!-- divinectorweb.com -->
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Login Form Design using flexbox</title>
    <link rel="stylesheet" href="static/css/style_login_register.css"> 
</head>
<body>
    <div class="form-box">
        <div class="wrapper">
            <div class="img-area">
                <img src="static/img/masjid.png" alt="">
            </div>
            <div class="form-area">
                <h3>Register Form</h3>
            <form>
                <div class="single-form">
                    <input type="text" placeholder="Nama" />
                </div>
                <div class="single-form">
                    <input type="text" placeholder="Username" />
                </div>
                <div class="single-form">
                    <input type="password" placeholder="Password" />
                </div>
                <div class="single-form">
                    <input type="password" placeholder="Re-Password" />
                </div>
                <input type="submit" value="Register"/>
                <p class="back-to-login">Back to Login? <a href="login.php">Login</a></p>
            </form>
            </div>
        </div>
    </div>
</body>
</html>
