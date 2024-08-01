<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/register.css">
    <link rel="icon" href="images/logo2.png" type="image">
    <title>Register</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <div class="register">
        <div class="box form-box">

        <?php
            include("connect.php");
            if(isset($_POST['submit'])){
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $gender = $_POST['gender'];
                $birthday = $_POST['birthday'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];
                $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            
                $verify_query = mysqli_query($conn, "SELECT username FROM users_info WHERE username = '$username'");

                if(mysqli_num_rows($verify_query) != 0){
                    echo "<div class='message'>
                            <p>Username already exist :( Try another one</p>
                        </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='button'>Go Back</button>";
                }
                elseif(strlen($_POST["password"]) < 8){
                    echo "<div class='message'>
                            <p>Password should be at least 8 characters.</p>
                        </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='button'>Go Back</button>";
                }
                elseif($_POST["password"] !== $_POST["confirm_password"]){
                    echo "<div class='message'>
                            <p>Passwords do not match.</p>
                        </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='button'>Go Back</button>";
                }
                else{
                    mysqli_query($conn, "INSERT INTO users_info(firstname, lastname, email, gender, birthday, username, password, password_hash) VALUES('$firstname', '$lastname', '$email', '$gender', '$birthday', '$username', '$password', '$password_hash')") or die("Error Occurred");
                    echo "<div class='success'>
                            <p>Registered successfully!</p>
                        </div>";
                    echo "<a href='index.php'><button class='button'>Login Now</button>";
                }
            }else {
        ?>

            <div class="image-box">
                <img src="images/coffee.png" alt="coffee">
            </div>
            <div class="register_form">
                <header>Sign Up</header>
                <form action="" method="post">
                <div class="column">
                        <div class="field input">
                            <label for="fir">First Name</label>
                            <input type="text" name="firstname" id="firstname" value="<?= htmlspecialchars(($_GET["firstname"] ?? "")) ?>" required>
                        </div>
                        <div class="field input">
                            <label for="lastname">Last Name</label>
                            <input type="text" name="lastname" id="lastname" value="<?= htmlspecialchars(($_GET["lastname"] ?? "")) ?>" required>
                        </div>
                    </div>
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="<?= htmlspecialchars(($_GET["email"] ?? "")) ?>" required>
                        <?php if (isset($_GET['error']) && $_GET['error'] == 'email_taken'): ?>
                            <p style="color: red; font-size: 0.8rem;">Email already taken.</p>
                        <?php endif; ?>
                    </div>
                    <div class="column">
                        <div class="field input">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" size="1" required>
                                <option value="">Please Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="field input">
                            <label for="birthday">Birthday</label>
                            <input type="date" name="birthday" id="birthday" value="<?= htmlspecialchars(($_GET["birthday"] ?? "")) ?>" required>
                        </div>
                    </div>
                    <div class="field input">  
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" value="<?= htmlspecialchars(($_GET["username"] ?? "")) ?>" required>
                        <?php if (isset($_GET['error']) && $_GET['error'] == 'username_taken'): ?>
                            <p style="color: red; font-size: 0.8rem;">Username already taken.</p>
                        <?php endif; ?>
                    </div>
                    <div class="column">
                        <div class="field input">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" value="<?= htmlspecialchars(($_GET["password"] ?? "")) ?>" required>
                            <?php if (isset($_GET['error']) && $_GET['error'] == 'password_length'): ?>
                                <p style="color: red; font-size: 0.8rem;">Password must be at least 8 characters.</p>
                            <?php endif; ?>
                        </div>
                        <div class="field input">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" value="<?= htmlspecialchars(($_GET["confirm_password"] ?? "")) ?>" required>
                            <?php if (isset($_GET['error']) && $_GET['error'] == 'password_mismatch'): ?>
                                <p style="color: red; font-size: 0.8rem;">Passwords must match.</p>
                            <?php endif; ?>
                    </div>
                    </div>
                    <div class="field">
                        <input type="submit" class="button" name="submit" value="Sign Up" required>
                    </div>
                    <div class="links">
                        Already have an account yet? <a href="index.php">Login here!</a>
                    </div>
                </form>
            </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>
