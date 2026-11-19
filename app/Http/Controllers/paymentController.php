<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loan;
use App\Models\emi;
use App\Models\payment;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loans = loan::all();
        $emis = emi::all();
        $payments = payment::all();

        return view('payment.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $loans = loan::all();
        $emis = emi::all();

        //dd($emis);

        return view('payment.create', compact('loans','emis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'loan_id' => 'required',
            'emi_id' => 'required',
            'duedate' => 'required',
            'pdate' => 'required'
        ]);

        $data = $request->all();

        $data['lday'] = (strtotime($data['pdate']) - strtotime($data['duedate'])) / (60 * 60 * 24);

        $data['lfee'] = $data['lday'] * 10;

        payment::create($data);

        return "insert done";
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
    public function edit(string $id)
    {
        //
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
