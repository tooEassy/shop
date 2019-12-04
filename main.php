<?php 
include("goods.php");
?>
<main>
    <div class="all-goods">
        <?php foreach($goods as $name => $val): ?>
            <a href="#" class="goods">
                <img src="images/<?= $val['photo'] ?>" alt="<?= $name ?>">
                <span class="name"><?= $name ?></span>
                <span class="price"><?= $val['price'] ?>₴</span>
            </a>
        <?php endforeach; ?>
    </div>
</main>