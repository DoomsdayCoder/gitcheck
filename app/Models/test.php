<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class test extends Model
{
    use HasFactory;
    use UUID;

    protected $table = 'tests';
    
    public $timestamps = false;

    public $fillable = ['id','folder_id'];
}
