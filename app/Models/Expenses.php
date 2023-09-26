<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Accounts;

class Expenses extends Model
{
    use HasFactory;

    protected $guarded = ['id', '_token', '_method'];

    public function account()
    {
        return $this->belongsTo(Accounts::class, 'account_id');
    }
}
