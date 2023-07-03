<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use Illuminate\Http\Request;

/**
 * Class PrescriptionController
 * @package App\Http\Controllers
 */
class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescriptions = Prescription::paginate();

        return view('prescription.index', compact('prescriptions'))
            ->with('i', (request()->input('page', 1) - 1) * $prescriptions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prescription = new Prescription();
        return view('prescription.create', compact('prescription'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Prescription::$rules);

        $prescription = Prescription::create($request->all());

        return redirect()->route('prescription.index')
            ->with('success', 'Prescripcion Creada Correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prescription = Prescription::find($id);

        return view('prescription.show', compact('prescription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prescription = Prescription::find($id);

        return view('prescription.edit', compact('prescription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Prescription $prescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prescription $prescription)
    {
        request()->validate(Prescription::$rules);

        $prescription->update($request->all());

        return redirect()->route('prescription.index')
            ->with('success', 'Prescripcion Editado Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $prescription = Prescription::find($id)->delete();

        return redirect()->route('prescription.index')
            ->with('success', 'Prescripcion Eliminado Correctamente');
    }
}
