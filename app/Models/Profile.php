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
    
       public function training()   
{
    return $this->hasMany(Training::class);  
}
   
   public function getByProfile(int $limit_count = 5)
{
     return $this->training()->with('profile')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
   
}
