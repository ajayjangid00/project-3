<?php
include "connect.php";

$username=$_REQUEST['username'];
$g=mysqli_query($db,"SELECT * FROM user ");
$f=mysqli_fetch_array($g);
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php" method="post">
                        <input type="hidden" name="username" value="<?php  echo $f['username'];?>" >
                            <label for="">Enter New Password</label>
                            <input type="password" name="password">
                            <button>Forget Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>