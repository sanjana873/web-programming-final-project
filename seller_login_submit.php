<?php
$conn = new mysqli("localhost", "ssirnam1", "ssirnam1", "ssirnam1");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $seller_user_id = $_POST['seller_user_id_login'];
    $seller_password = $_POST['seller_password_login'];
    
    // Use prepared statements
    $sql = "select * from seller_data where seller_user_id = '$seller_user_id' and seller_password = '$seller_password'";  
    // echo($sql);
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        $_SESSION['username'] =  $seller_user_id;
        setcookie("username", $seller_user_id, time() + (86400 * 30));
        header("location: seller_dashboard.php");
    }  
    else{  
        header('Location: login.php?error=invalid');
        exit();  
    } 

}

$conn->close();
?>