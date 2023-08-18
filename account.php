<?php
include "file.php";
?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<section class="account">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <div class="card">
                    <div class="card-header">
                        <h1>Instagram</h1>
                        <p class="text-center">Sign up to see photos and videos <br>from your friends.</p>
                        <button class="rounded pl-4 pr-4 ml-4 bg-primary text-white"><i class="fa fa-facebook"></i><a
                                href="#" class="text-white">&nbsp;Log in With
                                Facebook</a></button>
                        <h5><span>OR</span></h5>
                    </div>
                    <form action="accountcreate.php" method="post">
                        <div class="card-body">
                            <input type="number" name="mobile" placeholder="Mobile Number oe Email">
                            <input type="text" name="name" placeholder="Full Name" class="mt-2">
                            <input type="text" name="username" placeholder="Username" class="mt-2">
                            <input type="text" name="password" placeholder="Password" class="mt-2">
                        </div>
                        <div class="card-footer">
                            <p class="p4">People who use our service may have uploaded <br> your contact information to
                                Instagram. Learn More <a href="#">Learn More</a></p>
                            <p class="p4">By signing up, you agree to our <a href="#">Terms , Privacy Policy and Cookies
                                    Policy .</a></p>
                            <button>Sign up</button>

                        </div>
                    </form>
                </div>
                <div class="card mt-2" style="height:60px">
                    <div class="card-body">
                        <p class="p5">have an account? <a href="login.php">Log in</a></p>
                    </div>
                </div>
                <div class="getapp">
                    <p class="text-center">Get the app.</p>
                    <div class="ml-5 ">
                        <img src="image/Instagram_files/c5Rp7Ym-Klz.png" alt="" width=120px>
                        <img src="image/Instagram_files/EHY6QnZYdNX.png" alt="" width=100px>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>