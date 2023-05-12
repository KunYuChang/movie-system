<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>創建電影</title>
</head>
<body>
    <form action="/movie/create" method="post">
        <p>
            <label for="title">標題</label>
            <input id="title" type="text" name="title" placeholder="輸入標題">
        </p>
        <p>
            <label for="description">描述</label>
            <textarea name="description" id="description"></textarea>
        </p>
        <p>
            <button>送出</button>
        </p>
    </form>
</body>
</html>