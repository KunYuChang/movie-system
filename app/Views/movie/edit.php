<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>創建電影</title>
</head>
<body>
    <form action="/movie/update/<?= $movie['id'] ?>" method="post">
        <?= view('movie/_form') ?>
    </form>
</body>
</html>