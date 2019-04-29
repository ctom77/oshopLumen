<?= view('header'); ?>


<div class="container-oneProduct">
    <div class="detailsProduct">
        <img class ="detailsProduct__image" src="../<?= $oneProduct[0]->picture ?>" alt="">
        <div class="detailsProduct__infos">
            <h2 class="detailsProduct__infos__name"><?= $oneProduct[0]->name ?></h2>
            <p class="detailsProduct__infos__description"><?= $oneProduct[0]->description ?></p>
            <p class="detailsProduct__infos__description"><?= $oneProduct[0]->price." euros" ?></p>
            <form method="POST" action="<?= route('addCart') ?>">
            <input type="hidden" name="productId" value="<?= $oneProduct[0]->id ?>">
            <input type="hidden" name="productName" value="<?= $oneProduct[0]->name ?>">
            <input type="hidden" name="productPrice" value="<?= $oneProduct[0]->price ?>">
            <input type="submit" name="action" value="Ajouter au panier">
            </form>
            <?php isset($message) ? $message : 'rien dans le panier' ?>

        </div>
    </div>
</div>

<?= view('footer'); ?>