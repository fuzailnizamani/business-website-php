<?php
session_start();
if (empty($_SESSION['cart'])) {
    header("Location: index.php"); // Redirect if cart is empty
}
$pageTitle = "Checkout";
include('includes/header.php');
?>

<div class="checkout-container">
    <h2>Checkout</h2>
    <form action="order_process.php" method="post">
        <label>Full Name:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Phone:</label>
        <input type="tel" name="phone" required>

        <label>Delivery Address:</label>
        <textarea name="address" required></textarea>

        <button type="submit">Place Order</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>