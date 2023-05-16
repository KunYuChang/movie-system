<?= $this->extend('Layouts/dashboard') ?>
<?= $this->section("title") ?>電影系統<?= $this->endSection() ?>
<?= $this->section("content") ?>

<a href="/dashboard/category/new/">新增</a>

<table>
    <tr>
        <th>ID</th>
        <th>標籤</th>
        <th>操作</th>
    </tr>
    <?php foreach ($categories as $category): ?>
        <tr>
            <td><?= $category['id']?></td>
            <td><?= $category['title']?></td>
            <td>
                <a href="/dashboard/category/show/<?=$category['id']?>">顯示</a>
                <a href="/dashboard/category/edit/<?=$category['id']?>">編輯</a>

                <form action="/category/delete/<?= $category['id'] ?>" method="post">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?= $this->endSection() ?>

