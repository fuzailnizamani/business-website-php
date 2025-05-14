<?php include('includes/header.php'); ?>
<main>
  <section class="hero">
    <h1 class="black">Welcome to Best Food</h1>
    <p class="black">Freshly prepared food that brings happiness to your table.</p>
  </section>

  <section class="top-items">
    <h2>Top Items</h2>
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
</main>

<script src="./cart.js"></script>

<?php include('includes/footer.php'); ?>