<?= $this->extend('Layouts/dashboard') ?>
<?= $this->section("title") ?>顯示電影 - 電影系統<?= $this->endSection() ?>
<?= $this->section("content") ?>

    <h1><?= $movie['title'] ?></h1>
    <p><?= $movie['description']?></p>

<?= $this->endSection() ?>