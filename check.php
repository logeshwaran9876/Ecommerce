<?php
session_start();
$conn = new PDO("mysql:host=localhost;dbname=projectmark1", "root", "");

$username = trim($_POST['username']);
$password = trim($_POST['password']); 

$customerQuery = "SELECT * FROM customers WHERE customer_email = ? AND customer_password = ?";

$stmt = $conn->prepare($customerQuery);
$stmt->execute([$username, $password]);
$customer = $stmt->fetch();

if ($customer) {
    $_SESSION['user_id'] = $customer['customer_id'];
    $_SESSION['role'] = 'customer';

   
    if (isset($_SESSION['anonymous_user_id'])) {
        $anonymous_user_id = $_SESSION['anonymous_user_id'];
        $customer_id = $customer['customer_id'];

      
        $updateQuery = "
            UPDATE cart_items 
            SET 
                cart_item_user_type = 2, 
                customer_id = :customer_id, 
                anonymous_user_id = NULL, 
                cart_item_update_time = NOW()
            WHERE 
                anonymous_user_id = :anonymous_user_id 
                AND cart_item_user_type = 1";

        $updateStmt = $conn->prepare($updateQuery);
        $updateStmt->execute([
            ':customer_id' => $customer_id,
            ':anonymous_user_id' => $anonymous_user_id
        ]);

      
        unset($_SESSION['anonymous_user_id']);
    }


    header("Location: demo/index.php");
    exit();
} else {
   
    $_SESSION['error'] = "Invalid username or password";
    header("Location: login.php");
    exit();
}
?>
