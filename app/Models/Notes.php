<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;
    protected $table = "Notes";
    protected $fillable=[
        'Title','id','Content', 'Subtitle'
    ];

    public function Notes(){
        return $this-> belongsTo(Notes::class);
    }
}
