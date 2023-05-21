<?= $this->extend('Layouts/dashboard') ?>
<?= $this->section("title") ?>編輯標籤 - 電影系統<?= $this->endSection() ?>
<?= $this->section("content") ?>

<!-- FORM ERROR -->
<?= view('partials/_form-error') ?>

    <form action="/dashboard/category/update/<?= $category['id'] ?>" method="post">
        <?= view('/dashboard/category/_form')?>
    </form>

<?= $this->endSection() ?>