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
        
        $search = request('search');

        if ($search) {

            $schedules = Schedule::where([
                ['reason', 'like', '%'.$search.'%']
            ])->get();
            
        } else {
            
        $schedules = Schedule::orderBy('date', 'asc')->orderBy('time', 'asc')->get();
        
        
        }
        return view('schedule',['schedules'=>$schedules, 'search'=>$search]);
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
            'diagnosis' => $request->diagnosis,
        ]);

        return redirect()->route('schedule');
    }

    //Função delete
    public function scheduledelete($id) {


        $schedule = Schedule::find($id);
        $schedule->delete();
        return redirect('/schedule')->with('Excluido com sucesso');

    }

    //Função update
    public function scheduleupdate(Request $request, $id) {


        $data = [
            'patients_id' => $request->patients_id,
            'doctors_id' => $request->doctors_id,
            'reason' => $request->reason,
            'date' => $request->date,
            'time'=>$request->time,
            'diagnosis' => $request->diagnosis,
        ];
        Schedule::where('id', $id)->update($data);
        return redirect()->route('schedule');
    }


    //Função edit
    public function scheduleedit($id) {


            $doctors= Doctor::all();
            $patients= Patient::all();
            $schedules = Schedule::where('id', $id)->first();
            if(!empty($schedules)) {

                return view('scheduleedit',[
                'schedules'=>$schedules,
                'doctors'=>$doctors,
                'patients'=>$patients]);
            }
            else {

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
