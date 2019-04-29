<?= view('header'); ?>
<?php dump($productsByBrand); ?>

<div class="container-productsByCatagory">
    <div class="products">
    <?php foreach ($productsByBrand as $productByBrand) : ?>
        <div class="product" style='background-image:url("../<?= $productByBrand->picture ?>"); background-size:cover; background-position:center; height:30vh'>
            <h2 class="product__name"><?= $productByBrand->name ?></h2>
            <p class="product__description"><?= $productByBrand->description ?></p>
            <a href="<?= route('product', ['id' => $productByBrand->id]) ?>">Découvrir</a>
        </div>
    <?php endforeach; ?>
    </div>
</div>
<?= view('footer'); ?>