<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loan;

class loanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loans = loan::all();

        return view('loan.index', compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('loan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate(
            [
                'cname' => 'required',
                'lamount' => 'required',
                'irate' => 'required',
                'tenure' => 'required',
                'pfees' => 'required',
                'sdate' => 'required'
            ]
        );

        $data = $request -> all();

        $data['pfees_amt'] = $data['lamount'] * ($data['pfees'] / 100);

        $r = $data['irate'] / (12 * 100);

        $data['emi'] = ($data['lamount'] * $r * pow(1 + $r, $data['tenure'])) / (pow(1 + $r, $data['tenure']) - 1);

        loan::create($data);

        //return "insert data";
        return redirect('/loan');
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
