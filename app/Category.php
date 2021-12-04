<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table="categories";

    protected $fillable=['status','category_name'];

    public static $status=[
        'Active' => 'Active',
        'Inactive' => 'Inactive'
    ];
}
