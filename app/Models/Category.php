<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $table="tbl_category_product";
    protected $primarykey="category_id";
    protected $guarded=[];
    protected $fillable = [
        'category_id','category_name',
    ];
}
