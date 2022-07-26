<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'url_qr',
        'type',
        'profile_image',
        'cover_image',
        'name',
        'last_name',
        'gender',
        'birth_country',
        'birth_city',
        'birth_state',
        'birth_date',
        'passing_date',
        'passing_location',
        'languages',
        'quotes',
        'hobbies',
        'in_life',
        'interest_facts',
        'family_members',
        'allow_mentions'
    ];

    protected $guarded = ['id'];
    protected $table = 'profiles';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
