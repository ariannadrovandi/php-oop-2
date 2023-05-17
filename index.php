<!DOCTYPE html>
<html lang="en">
<?php
include __DIR__ .'/Database/db.php';
include __DIR__.'/View/header.php';
?>

<main class="container">
   <div class="row">
        <?php foreach ($products as $product) :?>
            <div class="col-6">
                <div class="card m-3">
                    <div class="card-img-top">
                        <img class="img-fluid" src="<?php echo $product->image; ?>" alt="<?php $product->title ?>">
                    </div>
                    <div class="card-body my-2">
                        <h2><?= $product->title ?></h2>
                        <p> Prezzo:<?= $product->price ?>€</p>
                        <p> Genere: <?= $product->category->genre ?></p>
                        <p> Tipologia: <?= $product->category->type ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
   
    </div>
</main>

<?php
include './View/footer.php';
?>
