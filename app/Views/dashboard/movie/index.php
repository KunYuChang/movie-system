<?= $this->extend('Layouts/dashboard') ?>
<?= $this->section("title") ?>電影清單 - 電影系統<?= $this->endSection() ?>
<?= $this->section("content") ?>

<h1>電影列表</h1>

<a href="/dashboard/movie/new/">新增</a>
<table>
    <tr>
        <th>ID</th>
        <th>標題</th>
        <th>內容</th>
        <th>操作</th>
    </tr>
    <?php foreach ($movies as $movie): ?>
        <tr>
            <td><?= $movie->id ?></td>
            <td><?= $movie->title ?></td>
            <td><?= $movie->description ?></td>
            <td>
                <a href="/dashboard/movie/show/<?= $movie->id ?>">顯示</a>
                <a href="/dashboard/movie/edit/<?= $movie->id ?>">編輯</a>

                <form action="/dashboard/movie/delete/<?= $movie->id ?>" method="post">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?= $this->endSection() ?>