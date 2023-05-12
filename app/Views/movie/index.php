<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>電影列表</h1>

    <a href="/movie/new/">新增</a>
    <table>
        <tr>
            <th>ID</th>
            <th>標題</th>
            <th>內容</th>
            <th>操作</th>
        </tr>
        <?php foreach ($movies as $movie): ?>
            <tr>
                <td><?= $movie['id']?></td>
                <td><?= $movie['title']?></td>
                <td><?= $movie['description']?></td>
                <td>
                    <a href="/movie/show/<?=$movie['id']?>">顯示</a>
                    <a href="/movie/edit/<?=$movie['id']?>">編輯</a>

                    <form action="/movie/delete/<?= $movie['id'] ?>" method="post">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>