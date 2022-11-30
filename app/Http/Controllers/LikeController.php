<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Auth;

class LikeController extends Controller
{
        public function store($trainingId)
    {
        Auth::user()->like($trainingId);
        return 'ok!'; 
    }

    public function destroy($trainingId)
    {
        Auth::user()->unlike($trainingId);
        return 'ok!'; 
    }
}
