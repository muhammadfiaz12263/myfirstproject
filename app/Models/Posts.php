<?php

namespace App\Models;

use App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    public function creator(){
        return $this->belongsTo(Students::class, 'user_id', 'id');
    }
}
