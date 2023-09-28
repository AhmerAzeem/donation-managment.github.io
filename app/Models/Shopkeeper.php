<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shopkeeper extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id', '_token', '_method'];


    /**
     * The categories that belong to the Shopkeeper
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
