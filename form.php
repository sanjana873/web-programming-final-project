<?php
// Start the session
session_start();

// Check if the session variable is set
if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
} else {
    // Redirect to the login page or handle the case when the session variable is not set
    header("Location: seller_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Description" content="Password">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"  href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Card Add</title>
</head>

<body class='login'>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
    <div class="home">
        <a href="index.php">Home</a>
    </div>
<div class="content">
            <header>Add a Property</header>
            <form action = "insert_card.php" method="POST" enctype="multipart/form-data" >
               <div class="field space">
                  <input type="text" id="seller_user_id" name="seller_user_id" value="<?php echo $_COOKIE['username']; ?>">
                          <label for="seller_user_id">Seller</label>
                      </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="text" class="pass-key" name = "address"  id="address" required placeholder="Address of the Property?">
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="text" class="pass-key" name = "age" id="age" required placeholder="How old is the Property?">
               </div>
               <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="text" class="pass-key" name = "bed" id="bed" required placeholder="Number of Beds in the Property?">
             </div>
             <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="text" class="pass-key" name = "ad" id="ad" required placeholder="Number of Bathrooms in the Property?">
             </div>
             <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="text" class="pass-key" name = "garden" id="garden" required placeholder="Is Garden available?">
             </div>
             <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="text" class="pass-key" name = "pa" id="pa" required placeholder="Is Parking Available?">
             </div>
             <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="text" class="pass-key" name = "tax" id="tax" required placeholder="Price of the Property?">
             </div>
             <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="file" class="pass-key" name = "file" id="file" required placeholder="Image of the Property">
             </div>
               <div class="field">
                  <input type="submit" name="submit" id = "submit" value = "Create Property">
               </div>
            </form>
         </div>
</body>
</html>	