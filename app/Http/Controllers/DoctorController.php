<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\createdoctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *  
     */

    public function doctor()
    {
        $doctors = Doctor::orderBy('name', 'asc')->get();

        return view('doctor', compact('doctors'));
    }


    public function createdoctor()
    {
        return view('createdoctor');
    }

    public function doctorstore(Request $request)
    {
        Doctor::create([
            'name' => $request->name,
            'especialidade' => $request->especialidade,
            'crm' => $request->crm
        ]);

        return redirect()->route('doctor')->with('success','Medico cadastrado com sucesso!!');
    }

    public function doctordelete($id) {

        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return redirect('/doctor')->with('warning','Medico excluido!!');
       // return redirect()->route('patient')->with('Agendamento excluido com sucesso!');

    }

    public function doctoredit($id) {

        
        $doctors = Doctor::where('id', $id)->first();
        if(!empty($doctors)) {

            return view('doctoredit',[
            'doctor'=>$doctors, 
        
        ]);
    
        }
        else {

            return redirect('/doctor');

       }

    }

    public function doctorupdtade(Request $request, $id) {

       
        $data = [
            'name' => $request->name,
            'especialidade' => $request->especialidade,
            'crm' => $request->crm
        ];
        Doctor::where('id', $id)->update($data);
        return redirect()->route('doctor')->with('success','Alteração Salva!!');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show($id)
    //{
        //
    //}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function edit($id)
   // {
        //
   // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    ///public function update(Request $request, $id)
    //{
        //
   /// }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   // public function destroy($id)
   // {
        //
    //}
    
}