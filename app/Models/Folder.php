<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{   
    use HasFactory;
    protected $table = "folders";
    protected $fillable=[
        'name','id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
