<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$item = isset($_GET['item']) ? $_GET['item'] : '';
$price = isset($_GET['price']) ? (float) $_GET['price'] : 0;

if ($item && $price > 0) {
    $_SESSION['cart'][] = ['name' => $item, 'price' => $price];
}

header("Location: menu.php");
exit();