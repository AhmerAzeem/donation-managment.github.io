<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemainingFund extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'amount', 'month'];
}
