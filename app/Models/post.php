<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    public $timestamps = false;

    protected $fillable = [
        'user',
        'post',
        'tag'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
