<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
    <title>Registration form</title>
</head>


<body>
    <div class="Signup">
        <h1>Sign Up</h1>

    <main>
        <?php
        if (isset($_GET['success'])) { //get is used to get value from the direted page
            echo "";
        }
        ?>

        <form method="POST" action="save-User.php">
            <div>
                <label for="Username" >Username</label>
                <input type="text" name="uname" required/>
            </div>
            <div>
                <label for="Password">Password</label>
                <input type="password" name="pwd" required/>
            </div>
            <div>
                <label for="email" >Email</label>
                <input type="email"  name="email" required/>
            </div>
            <div>
                <label for="DOB" >DOB</label>
                <input type="date" name="dob" required/>
            </div>
            <div>
            <label>Upload Photo</label>
                <input type="file" />
           </div>
            <div class="button-container">
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>
        
        <p> Have an account ? <a href ="signin.php"> Log in </a></p>
    
    </form>
    </main>

</body>

</html>