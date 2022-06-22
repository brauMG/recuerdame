<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfiles extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'id_profile'
    ];

    protected $guarded = ['id'];
    protected $table = 'user_profiles';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function profiles() {
        return $this->hasOne(Profiles::class);
    }
}
