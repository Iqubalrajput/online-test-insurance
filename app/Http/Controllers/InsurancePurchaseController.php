<?php

namespace App\Http\Controllers;

use App\Models\InsurancePurchase;
use Illuminate\Http\Request;

class InsurancePurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    // Validate incoming request data
    // $validatedData = $request->validate([
    //     'plan_id' => 'required|exists:insurances_plans,id', // Ensure insurance plan exists
    //     'persons.*.first_name' => 'string',
    //     'persons.*.last_name' => 'string',
    //     'persons.*.dob' => 'date', // Assuming you want to validate dob here
    //     'persons.*.email' => 'nullable|email',
    //     'persons.*.phone' => 'string',
    //     'persons.*.insurance_start' => 'nullable|date',
    //     'persons.*.marital_status' => 'string',
    //     'persons.*.gender' => 'string',
    //     'persons.*.days' => 'integer',
    //     'persons.*.destination' => 'nullable|string',
    //     'persons.*.passport_id' => 'nullable|string',
    //     // अन्य वैलिडेशन नियम यहाँ जोड़ें
    // ]);
    $passportPath = null;
    // Store each person's record
    foreach ($request['persons'] as $person) {
        if (isset($person['passport_file']) && $person['passport_file'] instanceof \Illuminate\Http\UploadedFile) {
            $passportPath = $person['passport_file']->store('passports', 'public'); 
        }
        $record = InsurancePurchase::create([
            'user_id' => auth()->id(), 
            'insurance_plan_id' => $request['plan_id'],
            'full_name' => ($person['first_name'] ?? 'N/A') . ' ' . ($person['last_name'] ?? 'N/A'),
            'date_of_birth' => $person['dob'] ?? null,
            'email' => $person['email'] ?? 'no-email@example.com',
            'phone' => $person['phone'] ?? '0000000000',
            'price' => $person['price'] ?? 0,
            'no_of_days' => $person['days'] ?? 0,
            'insurance_start' => $person['insurance_start'] ?? now(),
            'marital_status' => $person['marital_status'] ?? 'Single',
            'gender' => $person['gender'] ?? 'Not Specified',
            'destination' => $person['destination'] ?? 'N/A',
            'passport_id' => $person['passport_id'] ?? 'N/A',
            'uploaded_passport' => $passportPath,
        ]);
        
        $savedRecords[] = $record;
    }
    return response()->json(['message' => 'Records saved successfully!', 'data' => $savedRecords], 201);
}


    /**
     * Display the specified resource.
     */
    public function show(InsurancePurchase $insurancePurchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InsurancePurchase $insurancePurchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InsurancePurchase $insurancePurchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InsurancePurchase $insurancePurchase)
    {
        //
    }
}
