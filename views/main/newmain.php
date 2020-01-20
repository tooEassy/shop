<main>
    <div class="all-goods">
        <?php
        foreach($productArray as $val): ?>
            <a href= "<?= 'show/'.$val->id ?>" class="goods">
                <img src="/images/<?= $val->photo ?>" alt="<?= $val->name ?>">
                <span class="name"><?= $val->name ?></span>
                <span class="price"><?= $val->price ?>₴</span>
            </a>
        <?php endforeach; ?>
    </div>
</main>