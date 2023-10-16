<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ProClass;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Class = ProClass::all();
        
        return view('class.index', compact('Class'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('class.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ProClass::create($request->all());

        return redirect()->route('class.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProClass $class)
    {
        return view('class.edit', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProClass $class)
    {
        $class->update($request->all());

        return redirect()->route('class.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProClass $class)
    {
        $class->delete();

        return redirect()->route('class.index');
    }
}