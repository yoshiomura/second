<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
     use HasFactory;
    
     protected $fillable = [
        'review',
        'training_id',
        ];
        
     public function training()   
{
    return $this->belongsTo(Training::class);  
}
    public function reviews()
{
     return $this->hasMany(Review::class);
}
    public function getByReview(int $limit_count = 5)
{
     return $this->training()->with('review')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
    public function is_liked_by_auth_user()
  {
    $id = Auth::id();

    $likers = array();
    foreach($this->likes as $like) {
      array_push($likers, $like->user_id);
    }

    if (in_array($id, $likers)) {
      return true;
    } else {
      return false;
    }
}
}