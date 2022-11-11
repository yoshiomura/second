<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
     use HasFactory;
    
     protected $fillable = [
        'review',
        'training_id'
        ];
        
     public function training()   
{
    return $this->belongsTo(Training::class);  
}
    public function getByReview(int $limit_count = 5)
{
     return $this->training()->with('review')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}
