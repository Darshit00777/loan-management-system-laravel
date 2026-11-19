<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loan;
use App\Models\emi;
use App\Models\payment;

class summaryController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $l = loan::find($id);

        $emis = emi::where('loan_id', $id)
                    ->orderBy('month')
                    ->get();

        $totalPaid = 0;
        $totalLateFees = 0;
        $principalPaid = 0;
        $nextDue = 'Not Available';

        foreach ($emis as $e) {
            $p = payment::where('emi_id', $e->id)->first();

            if ($p) {

        $totalPaid = $totalPaid + $e->emi;

        $totalLateFees = $totalLateFees + $p->lfee;

        $principalPaid = $principalPaid + $e->p_component;

    }
    else if ($nextDue == 'Not Available') {

        $nextDue = $e->duedate;
    }
        }

        $remainingBalance = $l->lamount - $principalPaid;

        return view('summary.show', compact(
            'l',
            'emis',
            'totalPaid',
            'remainingBalance',
            'totalLateFees',
            'nextDue'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //public function show($id)
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
