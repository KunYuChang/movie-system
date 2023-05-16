<?= $this->extend('Layouts/dashboard') ?>
<?= $this->section("title") ?>創建電影 - 電影系統<?= $this->endSection() ?>
<?= $this->section("content") ?>

    <form action="/dashboard/movie/update/<?= $movie['id'] ?>" method="post">
        <?= view('/dashboard/movie/_form') ?>
    </form>

<?= $this->endSection() ?>