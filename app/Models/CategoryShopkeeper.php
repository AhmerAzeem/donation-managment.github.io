<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryShopkeeper extends Model
{
    use HasFactory;

    protected $guarded = ['id', '_token', '_method'];
}