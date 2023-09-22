
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <title>Log In</title>
</head>


<body>
    <div class="Login">
        <h1>Login</h1>

        <main>
            <!-- <?php
            if (isset($_GET['success'])) {
                echo "<script type='text/javascript>alert('Successfully Register')</script>";
            }
            if (isset($_GET['login']) === false) {
                echo "<script type='text/javascript>alert('Invalid Username and password')</script>";
            }
            ?>   -->

        <form method="POST" action="check-User.php">
            <div>
                <label for="Username">Username</label>
                <input type="text" name="uname" required/>
            </div>
            <div>
                <label for="Password">Password</label>
                <input type="password" name="pwd" required/>
            </div>
            <div>
                <button type="submit">Submit</button>
              
            </div>
        
        <p> Don't have an account ? <a href ="register.php"> Sign Up </a></p>
    
    </form>
    </main>

</body>

</html>