<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;

/**
 * Class DiseaseController
 * @package App\Http\Controllers
 */
class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diseases = Disease::paginate();

        return view('disease.index', compact('diseases'))
            ->with('i', (request()->input('page', 1) - 1) * $diseases->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disease = new Disease();
        return view('disease.create', compact('disease'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Disease::$rules);

        $disease = Disease::create($request->all());

        return redirect()->route('disease.index')
            ->with('success', 'Enfermedad Creada Correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disease = Disease::find($id);

        return view('disease.show', compact('disease'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disease = Disease::find($id);

        return view('disease.edit', compact('disease'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Disease $disease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disease $disease)
    {
        request()->validate(Disease::$rules);

        $disease->update($request->all());

        return redirect()->route('disease.index')
            ->with('success', 'Enfermedad Editada Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $disease = Disease::find($id)->delete();

        return redirect()->route('disease.index')
            ->with('success', 'Enfermedad Eliminada Correctamente');
    }
}
