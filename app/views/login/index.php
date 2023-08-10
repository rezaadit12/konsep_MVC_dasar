<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= BASEURL; ?>/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/login.css" >
    <title>Login</title>
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card ">

                <form class="card-body cardbody-color " action="<?= BASEURL; ?>/Login/login" method="post">

                    <div class="text-center">
                        <h2 class="text-center text-dark mt-4">Login Form</h2>

                        <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                            width="200px" alt="profile">
                        </div>

                        <div class="container col-9">
                            <div class="mb-3">

                                <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Email" name="email" required>
                            </div>
                            
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <!-- ============|COOKIE|============= -->
                                <input type="checkbox" id="checkbox1" name="remember" >
                                <label for="checkbox1">Remember Me</label>
                                <!-- ================================= -->
                            </div>

                            <div class="text-center"><button type="submit" name="submit" class="btn btn-primary px-5 mb-4 w-100">Login</button></div>
                        </div>

                        <div id="emailHelp" class="form-text text-center mb-4 text-dark">Not Registered? <a href="<?= BASEURL;?>/register/option" class="text-dark fw-bold"> Create an Account</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?= BASEURL; ?>/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>