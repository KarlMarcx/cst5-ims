<?php
    require 'openinghtml.php';
    require 'sidebar1.php';
?>

<div class="customer-main-content">
        <?php
             require 'header1.php';
         ?>
        <div class="customer-label">
            <h2>Customer</h2>
        </div>
        <section class="customer-stats">
            <div class="stat-box transaction">
                <h3>Total Transaction</h3>
                <p>19000</p>
            </div>
            <div class="stat-box paid">
                <h3>Total Paid</h3>
                <p>19000</p>
            </div>
            <div class="stat-box due">
                <h3>Total Due</h3>
                <p>0</p>
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