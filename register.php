<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Description" content="Password">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"  href="style.css">
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="Tooplate">

        <title>Urban Loft Townhomes</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/owl.carousel.min.css" rel="stylesheet">

        <link href="css/tooplate-moso-interior.css" rel="stylesheet">
        
<title>Login</title>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">Urban<span class="tooplate-red">Loft </span><span class="tooplate-green">Townhomes</span></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.php#section_2">About</a>
                        </li>
                        <li class="nav-item">
                        <a href="admin_login.php" class="nav-link">Admin</a>
            </li>
                      
                        
                    </ul>
                </div>
            </div>
        </nav>
        <div class="login">
<div class="content1">
            <header>Signup as Seller</header>
            <form action = "seller_register_submit.php" method="POST">
               <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" name = "seller_name" id="seller_name" required placeholder="Name">
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="text" class="pass-key" name = "seller_user_id"  id="seller_user_id" required placeholder="UserId">
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="email" class="pass-key" name = "seller_email" id="seller_email" required placeholder="Email">
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" class="pass-key" name = "seller_password" id="seller_password" required placeholder="Password">
               </div>
               <div class="fields">
                    <input type="checkbox" style="margin-left:6%;" required> <h8 style="color: #2691d9">I agree to the T&C</h8>
                </div>
               <div class="field">
                  <input type="submit" name="submit" id = "submit" value = "Submit">
               </div>
            </form>
            <div class="signup">
               Already have an account?
               <a href="login.php">Sign In</a>
            </div>
         </div>
     <div class="content2">
            <header>Signup as Buyer</header>
            <form action = "buyer_register_submit.php" method="POST">
               <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" name = "buyer_name" id="buyer_name" required placeholder="Name">
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="text" class="pass-key" name = "buyer_user_id"  id="buyer_user_id" required placeholder="UserId">
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="email" class="pass-key" name = "buyer_email" id="buyer_email" required placeholder="Email">
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" class="pass-key" name = "buyer_password" id="buyer_password" required placeholder="Password">
               </div>
               <div class="fields">
                    <input type="checkbox" style="margin-left:6%;" required> <h8 style="color: #2691d9">I agree to the T&C</h8>
                </div>
               <div class="field">
                  <input type="submit" name="submit" id = "submit" value = "Submit">
               </div>
            </form>
            <div class="signup">
               Already have an account?
               <a href="login.php">Sign In</a>
            </div>
         </div>
         <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom.js"></script>
</body>
</html>	