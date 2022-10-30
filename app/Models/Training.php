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
        'body'
        ];
    
     public function getPaginateByLimit(int $limit_count = 10)
{
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}
