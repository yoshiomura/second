<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Name;
use App\Models\Review;
use App\Models\Training;
use App\Http\Requests\TrainingRequest;


class TrainingController extends Controller
{
    public function index(Training $training)
{
    return view('trainings/index')->with(['trainings' => $training->getPaginateByLimit(10)]);
}

public function show(Training $training)
{
    return view('trainings/show')->with(['training' => $training,'reviews' => $training -> getByReview()]);
}
public function create(Name $name)
{
    return view('trainings/create')->with(['names' => $name->get()]);
}

public function store(TrainingRequest $request, Training $training)
{
     $input = $request['training'];
    $training->fill($input)->save();
    return redirect('/trainings/' . $training->id);
}

public function keep(Request $request, Training $training, Review $review)
{
     $input = $request['review'];
    $review->fill($input)->save();
    return redirect('/trainings/' . $training->id);
}

public function delete(Training $training)
{
    $training->delete();
    return redirect('/');
}

}
