<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'exercise'
        ];
    
    public function training()   
{
    return $this->hasMany(Training::class);  
}
    public function getByName(int $limit_count = 5)
{
     return $this->training()->with('name')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
    
}
