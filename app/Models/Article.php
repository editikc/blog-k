<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['content','title','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
