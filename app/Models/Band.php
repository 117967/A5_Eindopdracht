<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;

    protected $primaryKey = 'band_id';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'band_name',
        'band_email',
        'band_website',
        'band_genre',
        'band_location',
        'description',
    ];

    /*
    public function scopeFilter($query, array $filters)
    {
        dd($filters['genre']);
    } */

    // Set owner
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function shareduser(){
        return $this->belongsToMany(User::class, 'user_id' , 'shared_user');
    }
}
