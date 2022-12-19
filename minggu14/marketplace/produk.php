<?php
include "./data.php";
include("./components/header.php");
$id = $_GET["id"];
?>
<main>
<section class="product-page">
  <div class="product-section">
    <img src="./produk/<?= $products[$id]["thumbnail"]?>" alt="Product name">
    <div class="product-name"><?= $products[$id]["name"]?></div>
    <div class="product-description"><?= $products[$id]["description"]?></div>
    <div class="product-price"><?= $products[$id]["price"]?></div>
    <a href="<?= $products[$id]["shopee"]?>" class="buy-button">Beli di Shopee</a>
    <a href="https://api.whatsapp.com/send?phone=62895422526698&text=Halo saya ingin memesan produk <?= $products[$id]["name"]?>" class="buy-button">Beli via WhatsApp</a>
  </div>
</section>
</main>

<?php
include("./components/footer.php");
?>