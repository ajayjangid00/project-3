<?php
include "connect.php";
include "file.php";

?>
<link rel="stylesheet" href="style.css">

<section class="forget">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <img src="https://th.bing.com/th?id=OIP.Dl76Ea1YMLrJj_4IGx7i8AHaHa&w=249&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2"
                            alt="" width="100px">
                        <p class="mt-3">Trouble Logging in ?</p>
                        <p>Enter your email, phone, or username and we'll <br> send you a link to get back into your
                            account.</p>
                        <form action="edit.php" method="post">
                            
                            <input type="text" name="username" class="form-control"
                                placeholder="Mobile ,Email or username">
                            <button class="w-100 rounded mt-3 mb-3 bg-primary text-white">Send</button>
                            <a href="login.php" class="reset">Can't reset your password</a>
                        </form>
                        <h4><span>OR</span></h4>
                    </div>
                    <div class="card-body text-center">
                        <a href="account.php">Create New Account ?</a>
                    </div>
                    <div class="card-footer text-center">
                        <a href="login.php">Back to Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>