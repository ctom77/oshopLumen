<?= view('header'); ?>


<?php dump($_SESSION) ?>


<div class="container-cart">

<div class="carts">


<?php if (isset($_SESSION['cart'])) : ?>
<?php foreach ($_SESSION['cart'] as $cart) : ?>
<div class="cart">
<p class="cart__name"><?= $cart['name'] ?></p>
<p class="cart__price"><?= $cart['price'] ?></p>
<div class="cart__qty">
<form method="POST" action="<?= route('addCart') ?>">
<input type="hidden" name="productId" value="<?= $cart['id'] ?>">
<input type="hidden" name="productName" value="<?= $cart['name'] ?>">
<input type="hidden" name="productPrice" value="<?= $cart['price']?>">
<input type="submit" name="action" value="moins">
<p><?= $cart['qty']?></p>
<input type="submit" name="action" value="plus">

</form>

</div>
</div>

<?php endforeach; ?>
<?php endif; ?>

</div>

</div>



<?= view('footer'); ?>