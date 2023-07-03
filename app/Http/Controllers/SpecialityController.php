<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use Illuminate\Http\Request;

/**
 * Class SpecialityController
 * @package App\Http\Controllers
 */
class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialities = Speciality::paginate();

        return view('specialities.index', compact('specialities'))
            ->with('i', (request()->input('page', 1) - 1) * $specialities->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialities = new Speciality();
        return view('specialities.create', compact('specialities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Speciality::$rules);

        $specialities = Speciality::create($request->all());

        return redirect()->route('specialities.index')
            ->with('success', 'Especialidad Creada Correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $specialities = Speciality::find($id);

        return view('specialities.show', compact('specialities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specialities = Speciality::find($id);

        return view('specialities.edit', compact('specialities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Speciality $speciality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $specialty)
    {
        request()->validate(Speciality::$rules);

       $specialities = request()->except('_token','_method');
       Speciality::where('id','=', $specialty)->update( $specialities);

        return redirect()->route('specialities.index')
            ->with('success', 'Especialidad Editada Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $specialities = Speciality::find($id)->delete();

        return redirect()->route('specialities.index')
            ->with('success', 'Especialidad Eliminada Correctamente');
    }
}
