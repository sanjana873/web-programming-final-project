<?php
// Start the session
session_start();

// Check if the session variable is set
if (isset($_COOKIE['username1'])) {
    $username = $_COOKIE['username1'];
} else {
   
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Urban Loft Townhomes Delete Form</title>
    <link rel="stylesheet" href="style_delete_admin.css">
    <link rel="stylesheet"  href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/owl.carousel.min.css" rel="stylesheet">

        <link href="css/tooplate-moso-interior.css" rel="stylesheet">
</head>

<body>
   

    <div class="content1">
            <header>Delete Listing</header>
            <form action = "delete_card.php" method="POST">
            <div class="field space">
            <span class="fa fa-lock"></span>
        <input type="text" id="card_id" name="card_id" required placeholder="Listing ID to Delete">
                
            </div>
            <div class="field space">
                <input type="submit" value="Delete Listing">
            </div>
            <div class="signup-link">
               Back to Dashboard? <a href="admin_dashboard.php">Dashboard</a>
            </div>
            </form>
         </div>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_id = $_POST['card_id'];

    $conn = new mysqli("localhost", "ssirnam1", "ssirnam1", "ssirnam1");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM cards WHERE id = ?");
    $stmt->bind_param("i", $card_id);

    if ($stmt->execute()) {
        echo "Data deleted successfully.";
        header("location: seller_dashboard.php");

    } else {
        echo "Error deleting data: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
</body>

</html>
