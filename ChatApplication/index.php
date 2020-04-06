<!DOCTYPE html>
<html>
<head>
    <title>Chat Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="signup-form">
        <form action="login.php" method="post">
            <div class="form-header">
                <h2>Login</h2>
                <p>Login and start chatting with your friends...</p>
            </div>
            <div class="form-group">
                <label><b>Username</b></label>
                <input type="text" name="uname" placeholder='Enter your Username'>
            </div>
            <div class="form-group">
                <label><b>Password</b></label>
                <input type="text" name="pass" placeholder='Enter your Password'>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">
                    <b>Login</b>
                </button>
            </div>
        </form>

        <form action="signup.php" method="post">
            <div class="form-header">
                <h2>Sign Up</h2> 
                <p>Don't have an acount? Sign up here.</p>
            </div>
            <div class="form-group">
                <label><b>Username</b></label>
                <input type="text" name="uname" placeholder='Enter your Username'>
            </div>
            <div class="form-group">
                <label><b>Email</b></label>
                <input type="text" name="Email" placeholder='Enter your Email'>
            </div>
            <div class="form-group">
                <label><b>Password</b></label>
                <input type="text" name="Password" placeholder='Enter your Password'>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">
                    <b>Sign Up</b>
                </button>
            </div>
        </form>
    </div>
</body>
</html>