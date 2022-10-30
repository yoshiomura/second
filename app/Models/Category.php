<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function names()
{
    return $this->hasMany(Name::class);
}
public function getByCategory(int $limit_count = 5)
{
    return $this->names()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}
