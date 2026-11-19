<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emi;
use App\Models\loan;

class emiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loans = loan::all();

        return view('emi.index', compact('loans'));
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

        $schedules = emi::where('loan_id', $id)->get();

        return view('emi.schedule', compact('schedules'));

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

    public function generate($id, Request $request){

        $loan = loan::find($id);

        $remaining = $loan->lamount;

        $r = $loan->irate / (12 * 100);

        $data = $request->all();

        for($i = 1; $i <= $loan->tenure; $i++){
            
            $data['loan_id'] = $loan->id;

            $data['month'] = $i;

            $data['emi'] = $loan->emi;

            $data['i_component'] = $remaining * $r;

            $data['p_component'] = $data['emi'] - $data['i_component'];

            $data['r_principal'] = $remaining - $data['p_component'];

            $remaining = $data['r_principal'];

            dump($data);

            emi::create($data);
        }

        return "generated report";
        //return redirect('/emi/index');
    }

    
}
