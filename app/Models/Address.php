<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Address extends Model
{
    use HasFactory;
    //use \Spiritix\LadaCache\Database\LadaCacheTrait;

    protected $fillable = [
        'address_name',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
