document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll(".add-to-cart");
  buttons.forEach((button) => {
    button.addEventListener("click", function () {
      const item = this.getAttribute("data-item");
      const price = parseFloat(this.getAttribute("data-price"));
      const url = `add_to_cart.php?item=${encodeURIComponent(
        item
      )}&price=${price}`;
      window.location.href = url;
    });
  });
});