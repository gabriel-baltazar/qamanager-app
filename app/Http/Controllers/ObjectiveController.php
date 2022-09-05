<?php

namespace App\Http\Controllers;

use App\Models\objective;
use Illuminate\Http\Request;

class ObjectiveController extends Controller
{
    protected $Objective;
    public function __construct(Objective $objective)
    {
        $this->objective = $objective;
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
    
    public function show(objective $objective)
    {
        //
    }

    public function edit(objective $objective)
    {
        //
    }

    public function update(Request $request, objective $objective)
    {
        //
    }

    public function destroy(objective $objective)
    {
        //
    }
}
