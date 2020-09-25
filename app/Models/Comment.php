<?php

namespace App\Model;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{


    protected $dates = ['deleted_at'];
    protected $guarded = [];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'user_id');
    }
}
