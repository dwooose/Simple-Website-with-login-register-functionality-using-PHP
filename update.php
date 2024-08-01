<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/register.css">
    <link rel="icon" href="images/logo2.png" type="image">
    <title>Update Profile</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <header class="header">
        <a href="home.php" class="logo">JCO<span>ffee.</span></a>

        <nav class="navbar">
        <a href="profile.php">back</a>
            <a href="home.php">home</a>
            <a href="index.php">LOG OUT</a>
        </nav>
    </header>
    <div class="register update">
        <div class="box form-box">
            <div class="register_form">
                <header>Change Profile</header>
                <form action="update.php" method="post">
                    <?php
                        include("connect.php");

                        $id = $_SESSION['valid'];
                        
                        if(isset($_POST['submit'])){
                            $new_firstname = mysqli_real_escape_string($conn, $_POST['new_firstname']);
                            $new_lastname = mysqli_real_escape_string($conn, $_POST['new_lastname']);
                            $new_email = mysqli_real_escape_string($conn, $_POST['new_email']);
                            $new_gender = mysqli_real_escape_string($conn, $_POST['new_gender']);
                            $new_birthday = mysqli_real_escape_string($conn, $_POST['new_birthday']);
                            $new_username = mysqli_real_escape_string($conn, $_POST['new_username']);
                            $password = mysqli_real_escape_string($conn, $_POST['password']);

                            mysqli_query($conn, "UPDATE users_info SET username = '$new_username', firstname = '$new_firstname', lastname = '$new_lastname', email = '$new_email', gender = '$new_gender', birthday = '$new_birthday'
                                                WHERE username = '$id'") or die("Query failed"); 
                            echo "<div class='success'>
                                    <p>Profile Updated!</p>
                                </div>";
                            
                        }

                        $sql = "SELECT * FROM users_info WHERE username = '$id'";
                        $select = $conn->query($sql);
                        while($fetch = mysqli_fetch_assoc($select) ){

                            echo"
                            <div class='column'>
                                <div class='field input'>
                                    <label for='new_firstname'>First Name</label>
                                    <input type='text' name='new_firstname' id='new_firstname' value='$fetch[firstname]' required>
                                </div>
                                <div class='field input'>
                                    <label for='new_lastname'>Last Name</label>
                                    <input type='text' name='new_lastname' id='new_lastname' value='$fetch[lastname]' required>
                                </div>
                            </div>
                            <div class='field input'>
                                <label for='new_email'>Email</label>
                                <input type='email' name='new_email' id='new_email' value='$fetch[email]' required>
                            </div>
                            <div class='column'>
                                <div class='field input'>
                                    <label for='new_gender'>Gender</label>
                                    <input type='text' name='new_gender' id='new_gender' value='$fetch[gender]' required>
                                </div>
                                <div class='field input'>
                                    <label for='new_birthday'>Birthday</label>
                                    <input type='date' name='new_birthday' id='new_birthday' value='$fetch[birthday]' required>
                                </div>
                            </div>
                            <div class='field input'>  
                                <label for='new_username'>Username</label>
                                <input type='text' name='new_username' id='new_username' value='$fetch[username]' required>
                                
                            </div>
                            <div class='field input'>
                                <label for='password'>Password</label>
                                <input type='password' name='password' id='password' value='$fetch[password]?>'  required>
                            </div>
                            <div class='field'>
                                <input type='submit' class='button' name='submit' value='Update' required>
                            </div>
                            ";
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
