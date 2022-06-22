<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMentions extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_post',
        'id_user',
        'comment',
        'reply_to',
        'hide'
    ];

    protected $guarded = ['id'];
    protected $table = 'post_mentions';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function post() {
        return $this->belongsTo(Posts::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
