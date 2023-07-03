<?php

namespace App\Http\Controllers;

use App\Models\ConsultingRoom;
use Illuminate\Http\Request;

/**
 * Class ConsultingRoomController
 * @package App\Http\Controllers
 */
class ConsultingRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultingRooms = ConsultingRoom::paginate();

        return view('consulting-room.index', compact('consultingRooms'))
            ->with('i', (request()->input('page', 1) - 1) * $consultingRooms->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consultingRoom = new ConsultingRoom();
        return view('consulting-room.create', compact('consultingRoom'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConsultingRoom::$rules);

        $consultingRoom = ConsultingRoom::create($request->all());

        return redirect()->route('consulting-rooms.index')
            ->with('success', 'Consultorio Creada Correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultingRoom = ConsultingRoom::find($id);

        return view('consulting-room.show', compact('consultingRoom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultingRoom = ConsultingRoom::find($id);

        return view('consulting-room.edit', compact('consultingRoom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConsultingRoom $consultingRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConsultingRoom $consultingRoom)
    {
        request()->validate(ConsultingRoom::$rules);

        $consultingRoom->update($request->all());

        return redirect()->route('consulting-rooms.index')
            ->with('success', 'Consultorio Editada Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $consultingRoom = ConsultingRoom::find($id)->delete();

        return redirect()->route('consulting-rooms.index')
            ->with('success', 'Consultorio Eliminada Correctamente');
    }
}
