<?php

namespace App\Contracts\Repositories;

interface ProductRepository extends BaseRepository
{
    public function all();
    public function find($id);
}
