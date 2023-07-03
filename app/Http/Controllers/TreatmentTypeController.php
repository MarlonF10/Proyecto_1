<?php

namespace App\Http\Controllers;

use App\Models\TreatmentType;
use Illuminate\Http\Request;

/**
 * Class TreatmentTypeController
 * @package App\Http\Controllers
 */
class TreatmentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatmentTypes = TreatmentType::paginate();

        return view('treatment-type.index', compact('treatmentTypes'))
            ->with('i', (request()->input('page', 1) - 1) * $treatmentTypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $treatmentType = new TreatmentType();
        return view('treatment-type.create', compact('treatmentType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TreatmentType::$rules);

        $treatmentType = TreatmentType::create($request->all());

        return redirect()->route('treatment-type.index')
            ->with('success', 'Tipo de Tratamiento Creado Correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $treatmentType = TreatmentType::find($id);

        return view('treatment-type.show', compact('treatmentType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $treatmentType = TreatmentType::find($id);

        return view('treatment-type.edit', compact('treatmentType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TreatmentType $treatmentType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TreatmentType $treatmentType)
    {
        request()->validate(TreatmentType::$rules);

        $treatmentType->update($request->all());

        return redirect()->route('treatment-type.index')
            ->with('success', 'Tipo de Tratamiento Editado Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $treatmentType = TreatmentType::find($id)->delete();

        return redirect()->route('treatment-type.index')
            ->with('success', 'Tipo de Tratamiento Eliminado Correctamente');
    }
}
