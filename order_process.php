<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    
    // Calculate total
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    
    // Create order data
    $order = [
        'customer' => [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address
        ],
        'items' => $_SESSION['cart'],
        'total' => $total,
        'date' => date('Y-m-d H:i:s')
    ];
    
    // Save to file (optional)
    $orders = [];
    if (file_exists('orders.json')) {
        $orders = json_decode(file_get_contents('orders.json'), true);
    }
    $orders[] = $order;
    file_put_contents('orders.json', json_encode($orders, JSON_PRETTY_PRINT));
    
    // Clear cart
    unset($_SESSION['cart']);
    
    // Redirect to thank you page
    header("Location: index.php?order_success=1");
    exit();
}
?>