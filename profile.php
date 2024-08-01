<?php
    session_start();

    include("connect.php");
    if(!isset($_SESSION['valid'])){
        header("Location: index.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta name="author" content="Diana Rose Certeza">
            <title>Jake's Coffee Shop</title>
            <link rel="icon" href="images/logo2.png" type="image">
            <!-- CSS FILE -->
            <link rel="stylesheet" href="style/update.css">
            <!--FOR FONT-FAMILY POPPINS-->
            <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        <header class="header">
            <a href="home.php" class="logo">JCO<span>ffee.</span></a>

            <nav class="navbar">
                
                <a href="update.php">Change Profile</a>
                <a href="home.php">home</a>
                <a href="index.php">LOG OUT</a>
            </nav>
        </header>

        <main>
            <div class="main-box top">
                <div class="bottom">
                    <div class="box profile">
                        <h1>Profile</h1>
                        <br>
                        <img src="images/kill.png" alt="killua">
                        
                        <?php
                            $id = $_SESSION['valid'];
                            $email = $_SESSION['email'];
                            $firstname = $_SESSION['firstname'];
                            $lastname = $_SESSION['lastname'];
                            $gender = $_SESSION['gender'];
                            $birthday = $_SESSION['birthday'];
                            $query = mysqli_query($conn, "SELECT * FROM users_info WHERE username = '$id'");

                        ?>
                            <p class="uname"><b><?php echo $id; ?></b></p>
                            <br>
                            <div class="info">
                                <p>Email: <b><?php echo $email; ?></b></p>
                                <p>First Name: <b><?php echo $firstname; ?></b></p>
                                <p>Last Name: <b><?php echo $lastname; ?></b></p>
                                <p>Gender: <b><?php echo $gender; ?></b></p>
                                <p>Birthday: <b><?php echo $birthday; ?></b></p>
                                <br><br>
                            </div>
                        <h2>Your Order History:</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Payment Method</th>
                                    <th>Date Purchased</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mocha</td>
                                    <td>₱125.00</td>
                                    <td>1</td>
                                    <td>Cash On Delivery</td>
                                    <td>03/25/2024</td>
                                </tr>
                                <tr>
                                    <td>Latte</td>
                                    <td>₱140.00</td>
                                    <td>2</td>
                                    <td>Cash On Delivery</td>
                                    <td>03/30/2024</td>
                                </tr>
                                <tr>
                                    <td>Oatmeal Cookie</td>
                                    <td>₱110.00</td>
                                    <td>3</td>
                                    <td>Cash On Delivery</td>
                                    <td>03/30/2024</td>
                                </tr>
                                <tr>
                                    <td>Cappuccino</td>
                                    <td>₱120.00</td>
                                    <td>1</td>
                                    <td>Cash On Delivery</td>
                                    <td>04/15/2024</td>
                                </tr>
                                <tr>
                                    <td>Cheesecake</td>
                                    <td>₱120.00</td>
                                    <td>1</td>
                                    <td>Cash On Delivery</td>
                                    <td>04/15/2024</td>
                                </tr>
                                <tr>
                                    <td>Chocolate Muffin</td>
                                    <td>₱120.00</td>
                                    <td>4</td>
                                    <td>Gcash</td>
                                    <td>05/19/2024</td>
                                </tr>
                                <tr>
                                    <td>Caramel Latte</td>
                                    <td>₱130.00</td>
                                    <td>1</td>
                                    <td>Gcash</td>
                                    <td>06/25/2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </body>