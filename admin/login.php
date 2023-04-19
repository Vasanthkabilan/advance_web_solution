<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="login.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,0,0" />
    <title>Login Page</title>
</head>
<body>
    
    <div class="login-card-container">
        <div class="login-card">
            <!-- <div class="login-card-logo">
                <img src="" alt="logo">
            </div> -->
            <div class="login-card-header">
                <h1>Welcome Back</h1>
                <div>Please login with your username and password</div>
            </div>

            <form action="login_validate.php" method="post" class="login-card-form">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">account_circle</span>
                    <input type="text" id="email" name="email" placeholder="Enter Username">
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="password" id="password" name="password" placeholder="Enter Password">
                </div>
                <button type="submit">Login</button>
            </form>
            <div class="login-card-footer">
                Don't have an account? <a href="./Register.html">SignUp now.</a>
            </div>
        </div>
    </div>

</body>

</html>