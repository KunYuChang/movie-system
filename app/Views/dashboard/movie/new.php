<?= $this->extend('Layouts/dashboard') ?>
<?= $this->section("title") ?>創建電影 - 電影系統<?= $this->endSection() ?>

<!-- SECTION CONTENT-->
<?= $this->section("content") ?>

<!-- FORM ERROR -->
<?= view('partials/_form-error') ?>

<form action="/dashboard/movie/create" method="post">
    <?= view('/dashboard/movie/_form') ?>
</form>

<?= $this->endSection() ?>