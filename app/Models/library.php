<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class library extends Model
{
    use HasFactory;
    use UUID;

    protected $table = 'library';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id','cover_image','name','tags','link',
    'bookmark','review','reading_status','manga_status','created_at','updated_at'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ['user_id'];

    public static function getColNames() {
        $allCols= Schema::getColumnListing('library');
        $viewCols = array();

        $check = array('id','user_id','review', 'created_at', 'updated_at');
        
        foreach ($allCols as $col){
            if(in_array($col,$check)){
                array_push($viewCols,$col);
            }
        }
        return $viewCols;
    }

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

}
