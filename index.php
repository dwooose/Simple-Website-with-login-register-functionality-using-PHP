<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COmpatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="images/logo2.png" type="image">
    <title>Login</title>

</head>
<body>
    <div class="container">
        <div class="welcome-box">
            <h1>Welcome to <br><span>Jake's Coffee Shop</span>!</h2>
        </div>
        <div class="box form-box">
            <?php 
                include("connect.php");
                if(isset($_POST['submit'])){
                    $username = mysqli_real_escape_string($conn, $_POST['username']);
                    $password = mysqli_real_escape_string($conn, $_POST['password']);

                    $result = mysqli_query($conn, "SELECT * FROM users_info WHERE username = '$username' AND password = '$password'") or die("Select Error");
                    $row = mysqli_fetch_assoc($result);

                    if(is_array($row) && !empty($row)){
                        $_SESSION['firstname'] = $row['firstname'];
                        $_SESSION['lastname'] = $row['lastname'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['gender'] = $row['gender'];
                        $_SESSION['birthday'] = $row['birthday'];
                        $_SESSION['valid'] = $row['username'];
                        $_SESSION['password'] = $row['password'];
                        $_SESSION['password_hash'] = $row['password_hash'];
                        $_SESSION['id'] = $row['id'];
                    }else{
                        echo "<div class='message'>
                            <p>Invalid login :(</p>
                        </div>";
                    echo "<a href='index.php'><button class='button'>Go back</button>";
                    }
                    if(isset($_SESSION['valid'])){
                        header("Location: home.php");
                    }
                }else{

            ?>
            <header>Log In</header>
            <form  method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" class="login button" name="submit" value="Login" required>
                </div>

                <div class="links">
                    Don't have an account yet? <a href="register.php">Register here!</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>