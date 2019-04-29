<?= view('header'); ?>

<div class="container-productsByType">
    <div class="products">
    <?php foreach ($productsByType as $productByType) : ?>
        <div class="product" style='background-image:url("../<?= $productByType->picture ?>"); background-size:cover; background-position:center;'>
            <h2 class="product__name"><?= $productByType->name ?></h2>
            <p class="product__description"><?= $productByType->description ?></p>
            <a href="<?= route('product', ['id' => $productByType->id]) ?>">Découvrir</a>
        </div>
    <?php endforeach; ?>
    </div>
</div>


<?= view('footer'); ?>