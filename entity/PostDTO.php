<?php

class PostDTO {

    public Post $post;
    public string $username;
     

    public function __construct(Post $post, string $username){
        $this->post = $post;
        $this->username = $username;
    }
}