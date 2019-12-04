<?php
include("goods.php");
include("classes/Goods.php");
$good = new Goods($goods);
?>
<main>
    <div class="all-goods">
        <?php foreach($goods as $name => $val): ?>
            <a href="#" class="goods">
                <img src="images/<?= $val['photo'] ?>" alt="<?= $name ?>">
                <span class="name"><?= $name ?></span>
                <span class="price"><?= $val['price'] ?>₴</span>
            </a>
        <?php endforeach;
        try {
            echo $good->get_good('test');
        } catch (No_good $e) {
            echo $e->getMessage();
        }

        try {
            echo '<br>';
            print_r($good->get_good('Samsung 4K'));
        } catch (No_good $e) {
            echo $e->getMessage();
        }
        ?>
    </div>
</main>
