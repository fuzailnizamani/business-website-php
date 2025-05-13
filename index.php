<?php
session_start();
$pageTitle = "Menu";
include('includes/header.php');

// Sample food items (no database)
$foodItems = [
    [
        'id' => 1,
        'name' => 'Margherita Pizza',
        'description' => 'Classic tomato and mozzarella',
        'price' => 9.99,
        'image' => 'pizza.jpg'
    ],
    [
        'id' => 2,
        'name' => 'Cheeseburger',
        'description' => 'Beef patty with cheese & veggies',
        'price' => 6.99,
        'image' => 'burger.jpg'
    ],
    [
        'id' => 3,
        'name' => 'California Roll',
        'description' => 'Crab, avocado & cucumber',
        'price' => 8.99,
        'image' => 'sushi.jpg'
    ]
];
?>

<div class="food-container">
    <h2>Our Menu</h2>
    <div class="food-grid">
        <?php foreach ($foodItems as $item): ?>
            <div class="food-item">
                <img src="images/<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
                <h3><?php echo $item['name']; ?></h3>
                <p><?php echo $item['description']; ?></p>
                <p class="price">$<?php echo $item['price']; ?></p>
                <form method="post" action="cart.php?action=add&id=<?php echo $item['id']; ?>">
                    <input type="hidden" name="name" value="<?php echo $item['name']; ?>">
                    <input type="hidden" name="price" value="<?php echo $item['price']; ?>">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include('includes/footer.php'); ?>