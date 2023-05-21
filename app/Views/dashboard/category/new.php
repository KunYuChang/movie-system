<?= $this->extend('Layouts/dashboard') ?>
<?= $this->section("title") ?>創建標籤 - 電影系統<?= $this->endSection() ?>
<?= $this->section("content") ?>

<!-- FORM ERROR -->
<?= view('partials/_form-error') ?>
    
<form action="/dashboard/category/create" method="post">
    <?= view('/dashboard/category/_form')?>
</form>

<?= $this->endSection() ?>