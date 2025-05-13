<?php session_start(); ?>
<?php include('includes/header.php'); ?>

<main>
  <section class="menu">
    <h1>Our Menu</h1>
    <div class="item-list">
      <div class="item">
        <h3>Pizza</h3>
        <p>$12</p>
        <button class="add-to-cart" data-item="Pizza" data-price="12">Add to Cart</button>
      </div>
      <div class="item">
        <h3>Biryani</h3>
        <p>$15</p>
        <button class="add-to-cart" data-item="Biryani" data-price="15">Add to Cart</button>
      </div>
      <div class="item">
        <h3>Pasta</h3>
        <p>$10</p>
        <button class="add-to-cart" data-item="Pasta" data-price="10">Add to Cart</button>
      </div>
      <div class="item">
        <h3>Curry</h3>
        <p>$13</p>
        <button class="add-to-cart" data-item="Curry" data-price="13">Add to Cart</button>
      </div>
      <div class="item">
        <h3>Burger</h3>
        <p>$8</p>
        <button class="add-to-cart" data-item="Burger" data-price="8">Add to Cart</button>
      </div>
    </div>
  </section>
  <a href="cart.php">View Cart</a>
</main>
<?php include('includes/footer.php'); ?>