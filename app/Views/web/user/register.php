<?= $this->extend('Layouts/web') ?>
<?= $this->section("title") ?>登入 - 電影系統<?= $this->endSection() ?>

<!-- FORM ERROR -->
<?= view('partials/_form-error') ?>

<!-- CONTENT -->
<?= $this->section("content") ?>

<form action="<?= route_to('user.register_post')?>" method="post">

    <label for="user">使用者帳號</label>
    <input type="text" name="user" id="user">

    <label for="email">電子信箱</label>
    <input type="text" name="email" id="email">

    <label for="password">密碼</label>
    <input type="password" name="password" id="password">

    <button>送出</button>

</form>

<?= $this->endSection() ?>
