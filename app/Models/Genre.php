<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    
    public function trainings()
{
    return $this->hasMany(Training::class);
}
public function getByCategory(int $limit_count = 5)
{
    return $this->trainings()->with('genre')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}
