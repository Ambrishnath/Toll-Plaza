<?php

include("db_connection.php");

function updateTollPrice($newPrice) {
    global $conn;
    $sql = "UPDATE toll_prices SET price=$newPrice WHERE id=1";
    $conn->query($sql);
}

function getTotalTransactions() {
    global $conn;
    $sql = "SELECT COUNT(*) as total FROM transactions";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['total'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("Img/New3.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
        }

        .container {
            margin-top: 50px;
        }

        .options {
            margin-top: 20px;
        }

        .options a {
            color: white;
        }
    </style>
    <title>Admin Page</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Toll Plaza</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="admin_page.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
 

    <div class="options">
        <h3>Options:</h3>
        <ul>
            <li><a href="add_user.php">Add User Profile</a></li>
            <li><a href="view_all_users.php">View All Users</a></li>
            <li><a href="update_remove_user.php">Update/Remove User</a></li>
            <li><a href="total_transactions.php">Total Transactions</a></li>
        </ul>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
