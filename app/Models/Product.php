<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='tbl_product';
    protected $primarykey ='product_id';
    protected $guarded= [];
}
