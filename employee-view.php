<?php
session_start();
require 'openinghtml.php'; ?>

<?php require 'employee-view-sidebar.php' ?>

<div class="dashboard-main-content">
    <header>
        <h2>Inventory Management</h2>
        <div class="user-info">
            <div class="pfp">
                <img width="40" height="40" src="https://img.icons8.com/office/40/user.png" alt="user" />
            </div>
            <div class="username">
                <a href="#">User</a>
            </div>
            <div class="dropdown-content">
                <div class="username-profile">
                    <h4>Karyl Bardago</h4>
                    <img width="40" height="40" src="https://img.icons8.com/office/40/user.png" alt="user" />
                </div>
                <div class="logout-button">
                    <a href="logout.php">Log Out</a>
                </div>
            </div>
        </div>
    </header>
    <div class="welcome-message">
        <h2>Employee</h2>
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


<?php require 'closinghtml.php' ?>