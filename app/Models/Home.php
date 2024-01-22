<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Home extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'home';

    protected $fillable = [
        'judul', 'slug', 'desc', 'user_id', 'image'
    ];

    protected $hidden = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
