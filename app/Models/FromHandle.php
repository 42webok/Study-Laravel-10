<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FromHandle extends Model
{
    use HasFactory;

    protected $table = 'test_crud';
    protected $primaryKey = 'id';
    
}
