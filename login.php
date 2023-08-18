<?php
include "file.php";
?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="image/Screenshot 2023-07-28 202450.png" alt="" width="110%">
            </div>
            <div class="col-md-4">
                <form action="check.php" method="post" class="mycard">
                    <div class="card">
                        <div class="card-header">
                            <h1>Instagram</h1>
                        </div>
                        <div class="card-body">
                            <input type="text" name="username" placeholder="Phone number,username, or email"
                                class="myform">
                            <input type="password" name="password" placeholder="Password" class="myform">
                            <button class="">Login</button>
                            <h3><span>OR</span></h3>

                        </div>
                        <div class="card-footer">
                            <p class="p1"><i class="fa fa-facebook"><a href="#"> Log in With Facebook</a></i></p>
                            <p class="p2"><a href="forget.php">Forget password ?</a></p>
                        </div>

                    </div>
                </form>
                <div class="card signup" style="height:45px">
                    <div class="card-body">
                        <p class="p3">Don't have an account? <a href="account.php">Sign up</a></p>
                    </div>
                    <div class="getimg">
                    <p class="text-center">Get the app.</p>
                    <div class=" ">
                        <img src="image/Instagram_files/c5Rp7Ym-Klz.png" alt="" width=120px style="margin-top:-10px;margin-left:20px">
                        <img src="image/Instagram_files/EHY6QnZYdNX.png" alt="" width=100px style="margin-top:-35px;margin-left:160px">
                    </div>
                </div>
                </div>
                
            </div>
        </div>
    </div>
</section>