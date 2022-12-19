<?php
include "./data.php";
include("./components/header.php");
?>
<main>

    <div class="product-grid">
        <?php foreach($products as $index => $product):?>
    <div class="product">
        <a
        href="./produk.php?id=<?=$index?>"
        class="product-image"
        style="background-image: url('produk/<?= $product["thumbnail"]?>')"
        ></a>
        <div class="product-name"><?= $product["name"]?></div>
        <div class="product-price"><?= $product["price"]?></div>
    </div>
    <?php
    endforeach ?>
    
</main>

<?php
include("./components/footer.php");
?>