<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>創建標籤</title>
</head>
<body>
    
    <?= view('/partials/_session')?>
    
    <form action="/dashboard/category/create" method="post">
        <?= view('/dashboard/category/_form')?>
    </form>
</body>
</html>