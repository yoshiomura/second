<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;
use App\Http\Requests\TrainingRequest;

class TrainingController extends Controller
{
    public function index(Training $training)
{
    return view('trainings/index')->with(['trainings' => $training->getPaginateByLimit(5)]);
} 
public function show(Training $training)
{
    return view('trainings/show')->with(['training' => $training]);
}
public function create(Training $training)
{
    return view('trainings/create');
}

public function store(TrainingRequest $request, Training $training)
{
     $input = $request['training'];
    $training->fill($input)->save();
    return redirect('/trainings/' . $training->id);
}
public function edit(Training $training)
{
    return view('trainings/edit')->with(['training' => $training]);
}
public function update(TrainingRequest $request, Training $training)
{
    $input_training = $request['training'];
    $training->fill($input_training)->save();
    return redirect('/trainings/' . $training->id);
}
public function delete(Training $training)
{
    $training->delete();
    return redirect('/');
}
}
