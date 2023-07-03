<?php

namespace App\Http\Controllers;

use App\Models\Antecedent;
use Illuminate\Http\Request;

/**
 * Class AntecedentController
 * @package App\Http\Controllers
 */
class AntecedentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $antecedents = Antecedent::paginate();

        return view('antecedent.index', compact('antecedents'))
            ->with('i', (request()->input('page', 1) - 1) * $antecedents->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $antecedent = new Antecedent();
        return view('antecedent.create', compact('antecedent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Antecedent::$rules);

        $antecedent = Antecedent::create($request->all());

        return redirect()->route('antecedent.index')
            ->with('success', 'Antecedente Creada Correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $antecedent = Antecedent::find($id);

        return view('antecedent.show', compact('antecedent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $antecedent = Antecedent::find($id);

        return view('antecedent.edit', compact('antecedent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Antecedent $antecedent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Antecedent $antecedent)
    {
        request()->validate(Antecedent::$rules);

        $antecedent->update($request->all());

        return redirect()->route('antecedent.index')
            ->with('success', 'Antecedente Editada Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $antecedent = Antecedent::find($id)->delete();

        return redirect()->route('antecedent.index')
            ->with('success', 'Antecedente Eliminada Correctamente');
    }
}
