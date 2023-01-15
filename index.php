<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート</title>
</head>
<body>
    <h1>Form</h1>
    <form action="write.php" method="post" enctype="multipart/form-data">
        <p>お名前:<input type="text" name="name" size="30"></p>
        <p>メールアドレス:<input type="text" name="email" size="30"></p>
        <p>満足度（最高5、最低1）：
            <select name="score">
                <option value="">選択してください</option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select></p>
        <p>コメント:<textarea name="comment" rows="4" cols="50" ></textarea></p>
        <p>写真：</p><input type="file" name="attachment_file">
        <p><input type="submit" value="送信"></p>
    </form>
    
</body>
</html>