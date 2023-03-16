<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
            $query->where(fn($query) =>
                $query->where('body', 'like', '%' . $search . '%' )
    )
    );
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
