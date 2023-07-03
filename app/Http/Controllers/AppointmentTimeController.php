<?php

namespace App\Http\Controllers;

use App\Models\AppointmentTime;
use Illuminate\Http\Request;

/**
 * Class AppointmentTimeController
 * @package App\Http\Controllers
 */
class AppointmentTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointmentTimes = AppointmentTime::paginate();

        return view('appointment-time.index', compact('appointmentTimes'))
            ->with('i', (request()->input('page', 1) - 1) * $appointmentTimes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $appointmentTime = new AppointmentTime();
        return view('appointment-time.create', compact('appointmentTime'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AppointmentTime::$rules);

        $appointmentTime = AppointmentTime::create($request->all());

        return redirect()->route('appointment-time.index')
            ->with('success', 'Horario de Cita Creada Correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointmentTime = AppointmentTime::find($id);

        return view('appointment-time.show', compact('appointmentTime'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appointmentTime = AppointmentTime::find($id);

        return view('appointment-time.edit', compact('appointmentTime'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AppointmentTime $appointmentTime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppointmentTime $appointmentTime)
    {
        request()->validate(AppointmentTime::$rules);

        $appointmentTime->update($request->all());

        return redirect()->route('appointment-time.index')
            ->with('success', 'Horario de Cita Editada Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $appointmentTime = AppointmentTime::find($id)->delete();

        return redirect()->route('appointment-time.index')
            ->with('success', 'Horario de Cita Eliminada Correctamente');
    }
}
