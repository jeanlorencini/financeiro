<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PainelDigital;
class PainelDigitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $painelDigitals = PainelDigital::all();
        return view('painelDigitals.index', compact('painelDigitals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('painelDigitals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $painelDigital = new PainelDigital();
        $painelDigital->title = $request->input('title');
        $painelDigital->description = $request->input('description');
        $painelDigital->save();

        return redirect()->route('painelDigitals.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $painelDigital = PainelDigital::find($id);
        return view('painelDigitals.show', compact('painelDigital'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $painelDigital = PainelDigital::find($id);
        return view('painelDigitals.edit', compact('painelDigital'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $painelDigital = PainelDigital::find($id);
        $painelDigital->title = $request->input('title');
        $painelDigital->description = $request->input('description');
        $painelDigital->save();

        return redirect()->route('painelDigitals.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $painelDigital = PainelDigital::find($id);
        $painelDigital->delete();

        return redirect()->route('painelDigitals.index');
    }
}


