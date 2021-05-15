<?php
    require_once 'daos/UserDAO.php';
    //モデル（M）
    //投稿の設計図を作る
    class Comment{
        //プロパティ
        public $id; //コメント番号
        public $user_id; //コメント者のユーザー番号
        public $post_id; //投稿番号
        public $content; //本文
        public $created_at; //投稿時間
        //メソッド
        //コンストラクタ
        public function __construct($user_id='', $post_id='', $content=''){
            $this->user_id = $user_id;
            $this->post_id = $post_id;
            $this->content = $content;
        }
        
        //user_idからそのユーザーのインスタンスを取得するメソッド
        public function user(){
            $user = UserDAO::find($this->user_id);
            return $user;
        }
    }