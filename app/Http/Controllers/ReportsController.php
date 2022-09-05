<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use App\Models\Reports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LDAP\Result;

class ReportsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Reports::where('user_id', Auth::user()->id)->with('objectives')->get();

        return view('reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $countObjectives = $request->interation_objectives;

        $report = new Reports();
        $report->user_id = Auth::user()->id;
        $report->client = $request->client;
        $report->save();

        // Save objectives
        for($i = 1; $i <= $countObjectives; $i++){
            $objective = new Objective();

            if(isset($request['title'.$i])){
                $objective->title = $request['title'.$i];
                $objective->date_end = $request['date_end'.$i];
                $objective->quantity = $request['quantity_objectives'.$i];
                $objective->progress = $request['progress'.$i];
                $objective->report_id = $report->id;
                $objective->save();
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function show(Reports $reports)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reports $reports
     * @return \Illuminate\Http\Response
     */
    public function edit(Reports $reports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reports $reports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reports $reports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reports $reports
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reports $reports)
    {
        //
    }
}
