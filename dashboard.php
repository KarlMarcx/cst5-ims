<?php
    session_start();
    require 'openinghtml.php';
    require 'sidebar1.php';
?>

<div class="dashboard-main-content">
        <?php
             require 'header1.php';
         ?>
        <div class="welcome-message">
            <h2>Welcome to Inventory!</h2>
        </div>
        <section class="dashboard-stats">
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

 <?php
    require 'closinghtml.php';
?>