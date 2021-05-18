<?php

use CodeIgniter\Model;

class BlogModel extends Model{
    protected $table = 'post';
    protected $allowedFields = ['title', 'slug', 'body'];

    public function getPosts($slug = null){
        if(!$slug){
            return $this->findAll();
        }

        return $this->asArray()
                    ->where(['slug' => $slug])
                    ->first();
    }
}