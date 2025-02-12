<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php
         include 'sidebar1.php';
    ?>
    <div class="dashboard-main-content">
        <?php
             include 'header1.php';
         ?>
        <div class="welcome-message">
            <h2>Welcome to Inventory!</h2>
        </div>
        <section class="stats">
            <div class="stat-box red">
                <h3>Total Customers</h3>
                <p>1</p>
            </div>
            <div class="stat-box green">
                <h3>Total Suppliers</h3>
                <p>1</p>
            </div>
            <div class="stat-box blue">
                <h3>Total Sells</h3>
                <p>19,000</p>
            </div>
            <div class="stat-box gray">
                <h3>Total Purchases</h3>
                <p>191,845</p>
            </div>
        </section>
        <section class="sales">
            <div class="daily-sales">
                <h3>Today</h3>
                <p>Sell:</p>
                <p>Buy:</p>
            </div>
            <div class="monthly-sales">
                <h3>Monthly</h3>
                <p>Sell:</p>
                <p>Buy:</p>
            </div>
        </section>
        <section class="alert-box">
                <h3>Stock Alert</h3>
                <div class="stock-alert-info">
                    <div class="table-heading"> 
                        <h5>#</h5> 
                        <h5>id</h5>
                        <h5>name</h5>
                        <h5>Quantity</h5>
                    </div> 
                </div>
        </section>
    </div>
</body>
</html>

