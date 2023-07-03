<?php

namespace App\Http\Controllers;

use App\Models\MedicalFile;
use Illuminate\Http\Request;

/**
 * Class MedicalFileController
 * @package App\Http\Controllers
 */
class MedicalFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicalFiles = MedicalFile::paginate();

        return view('medical-file.index', compact('medicalFiles'))
            ->with('i', (request()->input('page', 1) - 1) * $medicalFiles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicalFile = new MedicalFile();
        return view('medical-file.create', compact('medicalFile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MedicalFile::$rules);

        $medicalFile = MedicalFile::create($request->all());

        return redirect()->route('medical-file.index')
            ->with('success', 'Expediente Creado Correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicalFile = MedicalFile::find($id);

        return view('medical-file.show', compact('medicalFile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicalFile = MedicalFile::find($id);

        return view('medical-file.edit', compact('medicalFile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MedicalFile $medicalFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicalFile $medicalFile)
    {
        request()->validate(MedicalFile::$rules);

        $medicalFile->update($request->all());

        return redirect()->route('medical-file.index')
            ->with('success', 'Expediente Editado Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $medicalFile = MedicalFile::find($id)->delete();

        return redirect()->route('medical-file.index')
            ->with('success', 'Expediente Eliminado Correctamente');
    }
}
