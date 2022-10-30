<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'exercise',
        'category_id',
        'training_id'
        ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('category')->this::with('training')->orderby('updated_at', 'DESC')->paginate($limit_count);
    }
     public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
