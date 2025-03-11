<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Beauty Parlour Management System | Cart</title>
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('bg.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .cart {
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 20px auto;
            max-width: 600px;
        }
        .cart ul {
            list-style: none;
            padding: 0;
        }
        .cart ul li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .cart ul li:last-child {
            border-bottom: none;
        }
        .cart h2 {
            margin-bottom: 20px;
        }
        .back-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .back-btn:hover {
            background-color: #0056b3;
        }
    </style>
  </head>
  <body id="home">
    <?php include_once('includes/header.php');?>

    <div class="container">
        <div class="cart">
            <h2>Selected Services</h2>
            <ul>
                <?php
                if (isset($_POST['services'])) {
                    foreach ($_POST['services'] as $service) {
                        echo "<li>$service</li>";
                    }
                } else {
                    echo "<li>No services selected.</li>";
                }
                ?>
            </ul>
            <button class="back-btn" onclick="window.location.href='services.php'">Go Back to Services</button>
        </div>
    </div>

    <?php include_once('includes/footer.php');?>
  </body>
</html>