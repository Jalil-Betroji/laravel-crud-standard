<?php

namespace App\Repositories;

use App\Models\Project;
use App\Repositories\BaseRepository;

class ProjectRepository extends BaseRepository {
    public function __construct(Project $project){
        $this->model = $project;
    }
}