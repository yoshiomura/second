<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function index(Name $name)
{
    return view('names.index')->with(['trainings' => $name->getByName()]);
}
}
