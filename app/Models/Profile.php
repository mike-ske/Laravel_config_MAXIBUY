<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    //use \Spiritix\LadaCache\Database\LadaCacheTrait;

    protected $fillable = [
        'name',
        'email',
        'user_id'
    ];
 
    public function user(){
        return $this->belongsTo(User::class);
    }
}
