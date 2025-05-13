<?php session_start(); ?>
<?php include('includes/header.php'); ?>

<main>
  <section class="cart">
    <h1>Your Shopping Cart</h1>

    <?php
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        echo "<ul>";
        $totalPrice = 0;
        foreach ($_SESSION['cart'] as $index => $item) {
            echo "<li>" . $item['name'] . " - $" . $item['price'] . 
                 " <a href='remove_item.php?index=$index' class='remove-item'>Remove</a></li>";
            $totalPrice += $item['price'];
        }
        echo "</ul>";
        echo "<h3>Total Price: $" . $totalPrice . "</h3>";
    } else {
        echo "<p>Your cart is empty.</p>";
    }
    ?>
    <a href="menu.php">Continue Shopping</a>
  </section>
</main>

<?php include('includes/footer.php'); ?>