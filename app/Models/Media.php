<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_post',
        'media_title',
        'media_description',
        'media_date',
        'media_location',
        'in_gallery',
    ];

    protected $guarded = ['id'];
    protected $table = 'media';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function post() {
        return $this->belongsTo(Posts::class);
    }
}
