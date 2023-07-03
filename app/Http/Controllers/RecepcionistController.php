<?php

namespace App\Http\Controllers;

use App\Models\Recepcionist;
use Illuminate\Http\Request;

/**
 * Class RecepcionistController
 * @package App\Http\Controllers
 */
class RecepcionistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recepcionists = Recepcionist::paginate();

        return view('recepcionist.index', compact('recepcionists'))
            ->with('i', (request()->input('page', 1) - 1) * $recepcionists->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recepcionist = new Recepcionist();
        return view('recepcionist.create', compact('recepcionist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Recepcionist::$rules);

        $recepcionist = Recepcionist::create($request->all());

        return redirect()->route('recepcionist.index')
            ->with('success', 'Recepcionista Creado Correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recepcionist = Recepcionist::find($id);

        return view('recepcionist.show', compact('recepcionist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recepcionist = Recepcionist::find($id);

        return view('recepcionist.edit', compact('recepcionist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Recepcionist $recepcionist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recepcionist $recepcionist)
    {
        request()->validate(Recepcionist::$rules);

        $recepcionist->update($request->all());

        return redirect()->route('recepcionist.index')
            ->with('success', 'Recepcionista Editado Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $recepcionist = Recepcionist::find($id)->delete();

        return redirect()->route('recepcionist.index')
            ->with('success', 'Recepcionista Eliminado Correctamente');
    }
}
