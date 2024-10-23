<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = Insurance::all(); 
        return view('insurances', compact('plans'));
    }
    
    public function show_insurance(Request $request)
    {
        $id = $request->query('id'); // Query string से ID प्राप्त करें
    
        // Fetch plan by ID
        $plans = Insurance::find($id);
    
        // Check if plan is found, if not handle the error
        if (!$plans) {
            return redirect()->back()->with('error', 'Plan not found!');
        }
    
        session(['selected_plan' => $plans]);
        // Pass plan data to view
        return view('insurances_details', compact('plans'));
    }
    
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Insurance $insurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Insurance $insurance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Insurance $insurance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Insurance $insurance)
    {
        //
    }
}
