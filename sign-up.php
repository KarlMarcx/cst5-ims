<?php require 'openinghtml.php' ?>
<div class="sign-up-container">
    <div class="sign-up-box">
        <div class="left-section">
            <form action="" method="post">
                <div class="emp-id box">
                    <h5>Employee ID:</h5>
                    <input type="text" name="emp-id" placeholder="Your employee ID e.g (112334)">
                </div>
                <div class="fname box">
                    <h5>First Name: </h5>
                    <input type="text" name="fname" placeholder="Your first name e.g (Juan)">
                </div>
                <div class="mname box">
                    <h5>Middle Name: </h5>
                    <input type="text" name="mname" placeholder="Your middle name e.g (Santos)">
                </div>
                <div class="lname box">
                    <h5>Last Name: </h5>
                    <input type="text" name="lname" placeholder="Your last name e.g (Dela Cruz)">
            </form>
        </div>

        <div class="right-section">
            <form action="" method="post">
                <div class="email box">
                    <h5>Email address:</h5>
                    <input type="text" name="email" placeholder="Your email address e.g (juandelacruz@gmail.com)">
                </div>
                <div class="contact-number box">
                    <h5>Contact number: </h5>
                    <input type="text" name="contact-num" placeholder="Your contact number e.g (09112233445)">
                </div>
                <div class="birthdate box">
                    <h5>Birthdate: </h5>
                    <input type="date" name="bday" placeholder="Your birthdate e.g (08/22/05)">
                </div>
                <div class="password box">
                    <h5>Password: </h5>
                    <input type="password" name="password" placeholder="Create a strong and secure password">
                </div>
            </form>
        </div>

    </div>
    <div class="create-account-button">
        <form action="" method="post">
            <button>Sign Up</button>
        </form>
    </div>
</div>