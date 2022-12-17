<?php include("./component/header.php");?>
<?php include("./component/navbar.php");?>


<div class="container">
    <div class="card">
    <div class="card-body">
    <form method="post" action="../controller/loginHandler.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <center>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-success">Login</button>
                    </div>
                    <div class="col">
                        <a href="signup.php"class="btn btn-primary">Create Account </a>
                    </div>
                </div>
            </div>
        </center>
    </form>
    </div>
    </div>

</div>


<?php include("./component/footer.php");?>