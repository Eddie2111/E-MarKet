<?php include("./component/header.php");?>
<?php include("./component/navbar.php");?>


<div class="container">
    <div class="card">
    <div class="card-body">
    <form method="POST" action="../controller/signupHandler.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="exampleInputPhone" aria-describedby="phoneHelp" name="phoneNumber">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="confirmPassword">
        </div>
        <center>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-success">Sign up</button>
                    </div>
                    <div class="col">
                        <a href="login.php"class="btn btn-primary">Back to Login</a>
                    </div>
                </div>
            </div>
        </center>
    </form>
    </div>
    </div>

</div>


<?php include("./component/footer.php");?>