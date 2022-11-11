<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Review $review)
{
    return view('reviews.index')->with(['reviews' => $review->getPaginateByLimit(10)]);
}
}
