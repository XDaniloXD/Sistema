<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\createpatient;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class PatientController extends Controller
{

    public function patient()
    {
        $patients = Patient::all();

        return view('patient', compact('patients'));
    }


    public function createpatient()
    {
        return view('createpatient');
    }


    public function patientstore(Request $request)
    {

        Patient::create([
            'name' => $request->name,
            'age' => $request->age,
            'weight' => $request->weight,
            'height' => $request->height,
            'address' => $request->address,
            'blood'=>$request->blood,
            'contatc'=>$request->contatc
        ]);

        return redirect()->route('patient')->with('success','Paciente Cadastrado!!');
    }

    public function patientdelete($id) {

        $patient = Patient::findOrFail($id);
        $patient->delete();
        return redirect('/patient')->with('warning','Excluido com sucesso');
       // return redirect()->route('patient')->with('Agendamento excluido com sucesso!');

    }

    public function patientedit($id) {

        
        $patients = Patient::where('id', $id)->first();
        if(!empty($patients)) {

            return view('patientedit',[
            'patient'=>$patients, 
        
        ]);
    
        }
        else {

            return redirect('/patient');

       }
       
       
       
    }

    public function patientver($id) 
    {

        
        $patients = Patient::where('id', $id)->first();
        if(!empty($patients)) {

            return view('patientver',[
            'patient'=>$patients, 
        
        ]);
    
        }
        else {

            return redirect('/patient');

       }
       
       
       
    }
    public function patientupdate(Request $request, $id) {

       
        $data = [
            'name' => $request->name,
            'age' => $request->age,
            'weight' => $request->weight,
            'height' => $request->height,
            'address' => $request->address,
            'blood'=>$request->blood,
            'contatc'=>$request->contatc
        ];
        Patient::where('id', $id)->update($data);
        return redirect()->route('patient')->with('success','Alteração Salva!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

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
