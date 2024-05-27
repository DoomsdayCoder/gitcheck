<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class folders extends Model
{
    use HasFactory;
    use UUID;

    public $timestamps = false;
    protected $table = 'folders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ["folder_name", "user_id", "content_count"];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ['id', 'user_id'];


    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }
}
