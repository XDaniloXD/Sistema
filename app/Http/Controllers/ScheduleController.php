<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PDF;


class ScheduleController extends Controller
{
    // Função Mostrando os agendamentos



    public function schedule()
    {
        $schedules = Schedule::orderBy('date', 'asc')->orderBy('time', 'asc')->get();
        return view('schedule', compact('schedules'));

    }


    public function schedulesim()
    {

        $schedules = Schedule::where('confirmed', 1 )->orderBy('date', 'asc')->orderBy('time', 'asc')->get();
        return view('schedule', compact('schedules'));

    }

    public function scheduletodas()
    {


        $schedules = Schedule::where('confirmed', 0 )->orderBy('date', 'asc')->orderBy('time', 'asc')->get();
        return view('schedule', compact('schedules'));
    }



    //Função onde pega os medicos e pacientes, para criar pra ir para schedulestore
    public function createschedule()
    {
        $patients= Patient::all();
        //dd($schedules);
        $doctors= Doctor::all();

        return view('createschedule',compact('patients', 'doctors'));
    }

    // Função para criação dos agendamentos
    public function schedulestore(Request $request)
    {

        Schedule::create([
            'patients_id' => $request->patients_id,
            'doctors_id' => $request->doctors_id,
            'reason' => $request->reason,
            'date' => $request->date,
            'time'=>$request->time,
            'confirmed'=>$request->confirmed,
            'diagnosis' => $request->diagnosis,
        ]);

        return redirect()->route('schedule')->with('success','Consulta Cadastrada!!');
    }

    //Função delete
    public function scheduledelete(Request $request, $id) {

        $id = $request['schedule_id'];
        $schedule = Schedule::find($id);
        $schedule->delete();
        return redirect('/schedule')->with('warning','Consulta excluida!');

    }

    //Função update
    public function scheduleupdate(Request $request, $id) {


        $data = [
            'doctors_id' => $request->doctors_id,
            'reason' => $request->reason,
            'date' => $request->date,
            'time'=>$request->time,
            'confirmed'=>$request->confirmed,
            'diagnosis' => $request->diagnosis,
        ];
        Schedule::where('id', $id)->update($data);

        return redirect()->route('schedule')->with('success','Salvo com sucesso!');
    }


    //Função edit
    public function scheduleedit($id)
    {

        $schedules = Schedule::where('id', $id)->first();


        $doctors= Doctor::all();
        //dd($schedules);
        if(!empty($schedules)) {

            return view ('scheduleedit',compact('schedules','doctors'));
        } else {

            return redirect('/schedule');
        }
    }


    public function schedulever($id)
    {

        $schedules = Schedule::where('id', $id)->first();


        $doctors= Doctor::all();
        //dd($schedules);
        if(!empty($schedules)) {

            return view ('schedulever',compact('schedules','doctors'));
        } else {

            return redirect('/schedule');
        }
    }


    //public function exportToPDF() {


      //  $pdf = PDF::loadView('exportToPDF');

       // return $pdf->stream('ListaAgendamentos.pdf');
       // dd($pdf);
    //}



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    //public function show($id)
    //{
        //
   // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    //public function edit($id)
    //{
        //
    //}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    //public function update(Request $request, $id)
    //{
        //
    //}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    //public function destroy($id)
    //{
        //
    //}
}
