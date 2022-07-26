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
        'id_profile',
        'id_user',
        'comment',
        'hide'
    ];

    protected $guarded = ['id'];
    protected $table = 'post_mentions';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function profile() {
        return $this->belongsTo(Profiles::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
