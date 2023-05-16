<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>
    <h1>標籤列表</h1>

    <?= view('/partials/_session')?>

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
    
</body>
</html>