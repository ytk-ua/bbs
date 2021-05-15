<?php
    //(C)
    require_once 'daos/PostDAO.php';
    $id = $_GET['id'];
    // print $id;
    //DAOを使って＄idから投稿を取得
    $post = PostDAO::find($id);
    // var_dump($post);
    
    include_once 'views/post_show_view.php';