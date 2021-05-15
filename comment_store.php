<?php
    //(C)
    require_once 'models/User.php';
    require_once 'daos/CommentDAO.php';
    session_start();
    // var_dump($_POST);
    $content = $_POST['content'];
    //誰がどの投稿に関してこんなコメントをした
    $login_user = $_SESSION['login_user'];
    $post_id = $_POST['post_id'];
    
    //コメントの新しい命誕生
    $comment = new Comment($login_user->id, $post_id, $content);
    // var_dump($comment);
    //DAOを使ってデータベースに保存
    CommentDAO::insert($comment);