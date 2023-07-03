<?php

namespace App\Http\Controllers;

use App\Models\SeverityType;
use Illuminate\Http\Request;

/**
 * Class SeverityTypeController
 * @package App\Http\Controllers
 */
class SeverityTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $severityTypes = SeverityType::paginate();

        return view('severity-type.index', compact('severityTypes'))
            ->with('i', (request()->input('page', 1) - 1) * $severityTypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $severityType = new SeverityType();
        return view('severity-type.create', compact('severityType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SeverityType::$rules);

        $severityType = SeverityType::create($request->all());

        return redirect()->route('severity-type.index')
            ->with('success', 'Tipo de Gravedad Creado Correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $severityType = SeverityType::find($id);

        return view('severity-type.show', compact('severityType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $severityType = SeverityType::find($id);

        return view('severity-type.edit', compact('severityType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SeverityType $severityType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SeverityType $severityType)
    {
        request()->validate(SeverityType::$rules);

        $severityType->update($request->all());

        return redirect()->route('severity-type.index')
            ->with('success', 'Tipo de Gravedad Editado Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $severityType = SeverityType::find($id)->delete();

        return redirect()->route('severity-type.index')
            ->with('success', 'Tipo de Gravedad Eliminado Correctamente');
    }
}
