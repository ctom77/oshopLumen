<?= view('header'); ?>


<?php dump($productsByCategory); ?>

<div class="container-productsByCatagory">
    <div class="products">
    <?php foreach ($productsByCategory as $productByCategory) : ?>
        <div class="product" style='background-image:url("../<?= $productByCategory->picture ?>"); background-size:cover; background-position:center;'>
            <h2 class="product__name"><?= $productByCategory->name ?></h2>
            <p class="product__description"><?= $productByCategory->description ?></p>
            <a href="<?= route('product', ['id' => $productByCategory->id]) ?>">Découvrir</a>
        </div>
    <?php endforeach; ?>
    </div>
</div>


<?= view('footer'); ?>