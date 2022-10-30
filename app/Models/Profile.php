<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'Name',
        'Age',
        'Team', 
        'My_training_menu'
        ];
    
    public function getPaginateByLimit(int $limit_count = 10)
{
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}
