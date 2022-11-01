<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'title',
        'objective',
        'body',
        'review',
        'movie',
        'name_id'
        //'profile_id'
        ];
    
     public function getPaginateByLimit(int $limit_count = 10)
{
    return $this::with('name')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
    public function name()
{
    return $this->belongsTo(Name::class);
}
   // public function profile()
//{
   // return $this->belongsTo(Profile::class);
//}
}