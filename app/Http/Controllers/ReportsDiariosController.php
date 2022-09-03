<?php

namespace App\Http\Controllers;

use App\Models\ReportsDiarios;
use Illuminate\Http\Request;

class ReportsDiariosController extends Controller
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
        return view('reports.create');
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
        var_dump($request->all());exit;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReportsDiarios  $reportsDiarios
     * @return \Illuminate\Http\Response
     */
    public function show(ReportsDiarios $reportsDiarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReportsDiarios  $reportsDiarios
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportsDiarios $reportsDiarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReportsDiarios  $reportsDiarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportsDiarios $reportsDiarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportsDiarios  $reportsDiarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportsDiarios $reportsDiarios)
    {
        //
    }
}
