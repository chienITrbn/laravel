<?php

namespace App\Repositories\Eloquents;

use App\Models\Product;
use App\Contracts\Repositories\ProductRepository;

class EloquentProductRepository extends EloquentBaseRepository implements ProductRepository
{
    protected $model;

    public function __construct(Product $model)//use contructor parrent
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();//or model::all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }
}
