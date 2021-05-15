<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿の詳細</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--ビュー（V）ファイル　index.phpを参照して使っている-->
    <h1><?= $post->id ?>番の投稿詳細</h1>

    <ul>
        <li><?= $post->id ?></li>
        <li><?= $post->user()->name ?></li>
        <li><?= $post->title ?></li>
        <li><?= $post->content ?></li>
        <li><img src="upload/<?= $post->image ?>"></li>
        <li><?= $post->created_at ?></li>
    </ul>
    
    <h2>コメント投稿</h2>
    <form action="comment_store.php" method="POST">
        <input type="hidden" name="post_id" value="<?= $post->id ?>">
        コメント：<input type="text" name="content"><br>
         <button type="submit">投稿</button>
    </form>
    
    <p><a href="top.php">マイページへ</a></p>
    <!--<p><a href="delete.php">全ユーザー削除</a></p>-->
</body>
</html>