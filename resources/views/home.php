
<?= view('header') ?>
    

    <section class="container-home">
        <br><br><br>
        
        <div class="categories">
        <?php foreach ($categories as $category) : ?>
            <div class="category" style="background-image:url(<?= $category->picture ?>); background-size:cover; background-position:center;">
                <h2 class="category__name"><?= $category->name?></h2>
                <p class="category__subtitle"><?= $category->subtitle ?></p>
                <a href="<?= route('category', ['id' => $category->id]) ?>" class="category__link">Decouvrez les produits</a>
            </div>
        <hr>
        <?php endforeach; ?>
        </div>
        
        <br><br><br>
    </section>

    <?= view('footer') ?>



   