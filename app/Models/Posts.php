<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_profile',
        'post_type'
    ];

    protected $guarded = ['id'];
    protected $table = 'posts';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function profile() {
        return $this->belongsTo(Profiles::class);
    }
}
