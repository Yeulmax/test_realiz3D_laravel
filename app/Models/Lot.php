<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class Lot extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'group_id'];
}
