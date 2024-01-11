<?php

namespace App\Repositories;

use illuminate\Database\Eloquent\Model;

abstract class BaseRepository {
    protected $model ;
    public function __construct(Model $model){
        $this->model = $model;
    }
}